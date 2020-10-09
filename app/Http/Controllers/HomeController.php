<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __invoke()
    {
        $this->middleware('auth');
        $page = "About";
        $articles2 = \App\Article::where ('title','LIKE',"%Bahasa%")->get(); //variabel pada sidebar artikel bahasa
        $articles3 = \App\Article::where ('title','LIKE',"%Game%")->get(); //variabel pada sidebar artikel Game
        return view('layout.about',[
            'page' => $page,
            'articles2' => $articles2,
            'articles3' => $articles3,
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check()){

        }else{
            return redirect('login')->with('alert','Login First');
        }

        $page = "Home";
        $articles2 = \App\Article::where ('title','LIKE',"%Bahasa%")->get(); //variabel pada sidebar artikel bahasa
        $articles3 = \App\Article::where ('title','LIKE',"%Game%")->get(); //variabel pada sidebar artikel Game
        return view('layout.home',[
            'page' => $page,
            'articles2' => $articles2,
            'articles3' => $articles3,
        ]);
    }
}
