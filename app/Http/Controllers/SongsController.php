<?php namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use DB;
	use App\Models\SongQuery;
	
	class SongsController extends Controller {

		// Displays a search form
		public function search()
		{
			// view will return a php file
			return view('search'); 
		}

		public function results(Request $request)
		{
			// Redirect if nothing input...
			if (!$request->input('song_title'))
				return redirect('/songs/search');

			// How to access data regardless if GET POST, etc...
			//var_dump($request->input('song_title'));

			// Move the data querying into a model...
			$query = new SongQuery();
			$songs = $query->search($request->input('song_title'));

			// View can take an array of Key, Value paries. 
			return view('results', [
				'song_title' => $request->input('song_title'),
				'songs' => $songs
			]);
		}
	}