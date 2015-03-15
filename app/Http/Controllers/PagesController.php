<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
    public function index(){
        // $data = [];
        // $data['name'] = '<em>John Doe</em>';
        // $data['lessons'] = ['My first lessons', 'My second lesson', 'My third lesson'];
        // return view('pages.home',$data);

        $lessons = ['My first lessons', 'My second lesson', 'My third lesson'];
        $name = 'Polo y su miserable nutria';
        return view('pages.home', compact('lessons', 'name'));
    }

    
    public function about(){
        return view('pages.about');
    }
}
