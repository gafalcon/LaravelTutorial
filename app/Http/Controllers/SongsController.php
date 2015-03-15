<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Song;

class SongsController extends Controller {

	//
    public function index(Song $song){
        //$songs =Song::get(); 

        $songs = $song->get(); //Using dependency injection
        //dd($songs); Same as ==== die(vardump($songs));
        return view('songs.index', compact('songs'));

    }

    public function show(Song $song){
        // We dont need this with route - model binding
        //$song = Song::whereSlug($slug)->first();
        return view('songs.show', compact('song'));
    }

    public function edit(Song $song){
        //return 'Edit the song with title: '.$song->title;
        return view('songs.edit', compact('song'));
    }
    
}
