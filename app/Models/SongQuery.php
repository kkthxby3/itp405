<?php namespace App\Models;

	use DB;

	class SongQuery {

		public function search($term)
		{
			// Many ways to access DB, PDO used in background
			// Using Query Builder...
				// Use get to run the query and get all the results. 
			$query = DB::table('songs')
				->join('artists', 'artists.id', '=', 'songs.artist_id')
				->join('genres', 'genres.id', '=', 'songs.genre_id');

			if ($term)
				$query->where('title', 'LIKE', '%' . $term . '%');

			$query->orderBy('artist_name', 'asc');
			// Does SQL injecting safety stuff behind scene. 
			// Method chaining, fluid interface...
				// Returns object each time to chain together. 

			// Dumps out the information...  Dump and Die.
				// Useful for debugging. 
			//dd($songs);

			return $query->get();
		}
	}