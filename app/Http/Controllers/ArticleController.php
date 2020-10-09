<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Cache;
use Auth;
date_default_timezone_set('Asia/Jakarta');
class ArticleController extends Controller{

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
        $page = 'Artikel';
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
        $page = $article->title;

        return view('layout.details',[
            'article' => $article,
            'articles2' => $articles2,
            'articles3' => $articles3,
            'page' => $page,
        ]);
    }
/*public function hal($id){
        return 'Halaman ID : '.$id;
    }
    public function __invoke(){
        return view('pages.article');
    }
    */
}
