<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Cache;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __invoke(Request $request){
        if(Auth::check()){

        }else{
            return redirect('login')->with('alert','Login First');
        }
        //chache
        $value = Cache::rememberForever('articles', function(){
            return \App\Article::paginate(3);
        });
        // "\app\Article == model/sintaks"
        //get = menampilkan semua data di database, first = 1 data
        $articles = \App\Article::paginate(3);
        $articles2 = \App\Article::where ('title','LIKE',"%Bahasa%")->get(); //variabel pada sidebar artikel bahasa
        $articles3 = \App\Article::where ('title','LIKE',"%Game%")->get(); //variabel pada sidebar artikel game
        $page = 'Home';
        return view('layout.article',[
            'articles' => $articles,
            'articles2' => $articles2,
            'articles3' => $articles3,
            'page' => $page
            //page dipanggil di view
            ]);
    }
    public function article($id){
        $article = \App\Article::where('id','=',$id)->find($id);
        $articles2 = \App\Article::where ('title','LIKE',"%Bahasa%")->get(); //variabel pada sidebar artikel bahasa
        $articles3 = \App\Article::where ('title','LIKE',"%Game%")->get(); //variabel pada sidebar artikel game
        $page = 'Artikel';

        return view('layout.details',[
            'article' => $article,
            'articles2' => $articles2,
            'articles3' => $articles3,
            'page' => $page,
        ]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     //mengecek auth
    //     if(Auth::check()){
    //     }else{
    //         //jika gagal akan ditujukan ke login dengan alert login first
    //         return redirect('login')->with('alert','Login First');
    //     }
    //     $page = "Home";
    //     $articles2 = \App\Article::where ('title','LIKE',"%Bahasa%")->get(); //variabel pada sidebar artikel bahasa
    //     $articles3 = \App\Article::where ('title','LIKE',"%Game%")->get(); //variabel pada sidebar artikel Game
    //     return view('layout.home',[
    //         'page' => $page,
    //         'articles2' => $articles2,
    //         'articles3' => $articles3,
    //     ]);
    // }
}
