<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Song;

class SongsController extends Controller {

    //This is a different method instead of route binding
	// Injecting the song model through the controller
    public function __construct(Song $song){
        $this->song = $song;
    }
    
    public function index(Song $song){
        //$songs =Song::get(); 

        $songs = $song->get(); //Using dependency injection
        //dd($songs); Same as ==== die(vardump($songs));
        return view('songs.index', compact('songs'));

    }

    public function show(Song $song){ //$song binded through route
        // We dont need this with route - model binding
        //$song = Song::whereSlug($slug)->first();
        return view('songs.show', compact('song'));
    }

    public function edit(Song $song){
        //return 'Edit the song with title: '.$song->title;
        return view('songs.edit', compact('song'));
    }

    public function update(Song $song, Request $request) {

        $song->fill($request->input())->save();
        // $song->title = $request->get('title');
        // $song->save();
        return redirect('songs');
        //return $request->get('title');
        //return $song->title;
    }
    
}
