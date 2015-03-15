<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

class SongsController extends Controller {

	//
    public function index(){
        $songs = DB::table('songs')->get(); 

        //dd($songs); Same as ==== die(vardump($songs));
        return view('songs.index', compact('songs'));

    }

    public function show($id){
        $song = DB::table('songs')->find($id);
        return view('songs.show', compact('song'));
    }
    
}
