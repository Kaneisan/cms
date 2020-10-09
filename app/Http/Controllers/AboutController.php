<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AboutController extends Controller
{
    /*
    //__invoke
    public function __invoke(){
        //return 'Nama : Wildani Sulthon Mahmudi<br>NIM : 1931710170';
        return view('pages.about');
    }
    */
    public function __invoke()
    {
        if(Auth::check()){

        }else{
            return redirect('login')->with('alert','Login First');
        }
        $page = "About";
        $articles2 = \App\Article::where ('title','LIKE',"%Bahasa%")->get(); //variabel pada sidebar artikel bahasa
        $articles3 = \App\Article::where ('title','LIKE',"%Game%")->get(); //variabel pada sidebar artikel Game
        return view('layout.about',[
            'page' => $page,
            'articles2' => $articles2,
            'articles3' => $articles3,
        ]);
    }
}
