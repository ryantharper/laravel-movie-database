<?php

namespace App\Http\Controllers;
use App\Movie;
use App\Show;
use App\Episode;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RetflixController extends Controller
{
    public function movielist()
    {
      $file1 = '/home/ryan/movies.txt';
      $file2 = '/home/ryan/tvshows.txt';
      $query1 = "LOAD DATA INFILE '" . $file1 . "' INTO TABLE movies";
      $query2 = "LOAD DATA INFILE '" . $file2 . "' INTO TABLE tvs";
      DB::connection()->getPdo()->exec('TRUNCATE TABLE movies');
      DB::connection()->getPdo()->exec('TRUNCATE TABLE tvs');
      DB::connection()->getPdo()->exec($query1);
      DB::connection()->getPdo()->exec($query2);

      //$movs = DB::table('movies')->get();
      $tvs = Show::all();
      $movs = Movie::all();
      return view('main', compact('movs', 'tvs'));
    }

    public function showTv($id)
    {
      $file = '/home/ryan/episodes.txt';
      $query = "LOAD DATA INFILE '" . $file . "' INTO TABLE eps";
      DB::connection()->getPdo()->exec("TRUNCATE TABLE eps");
      DB::connection()->getPdo()->exec($query);
      $ep = Episode::where('imdbid', $id)->get();

      $show = Show::where('imdbid', $id)->first();
      return view('tvshow', compact('show', 'ep'));
    }

    public function showEp($id, $season, $episode)
    {
      $epi = Episode::where('imdbid', $id)
                            ->where('season', $season)
                            ->where('episode', $episode)
                            ->first();
      $shows = Show::where('imdbid', $id)->first();
      return view('episodePage', compact('epi', 'shows'));
    }

    public function showMov($id)
    {
      $film = Movie::find($id);
      return view('show', compact('film'));
    }
}
