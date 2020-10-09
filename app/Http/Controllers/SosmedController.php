<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class SosmedController extends Controller
{
    public function __invoke()
    {
        if(Auth::check()){

        }else{
            return redirect('login')->with('alert','Login First');
        }
        $page = "Social Media";
        $articles2 = \App\Article::where ('title','LIKE',"%Bahasa%")->get(); //variabel pada sidebar artikel bahasa
        $articles3 = \App\Article::where ('title','LIKE',"%Game%")->get(); //variabel pada sidebar artikel game

        return view('layout.sosmed',[
            'page' => $page,
            'articles2' => $articles2,
            'articles3' => $articles3,
        ]);
        $value = Cache::rememberForever('articles', function(){
            return \App\Article::all();
        });
    }
}
