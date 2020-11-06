<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Cache;
use Auth;
use Illuminate\Support\Facades\Gate;
date_default_timezone_set('Asia/Jakarta');
class ArticleController extends Controller{
    public function __construct()
    {
        $this->middleware(function($request, $next){
            if(Gate::allows('manage-articles'))return $next($request);
            abort(403,'Anda tidak memiliki cukup hak akses');
            //return redirect()->back();
        });
    }
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
        $page = 'Artikel';

        return view('layout.details',[
            'article' => $article,
            'articles2' => $articles2,
            'articles3' => $articles3,
            'page' => $page,
        ]);
    }
    public function index()
    {
        $articles = \App\Article::paginate(5);
        $articles2 = \App\Article::where ('title','LIKE',"%Bahasa%")->get(); //variabel pada sidebar artikel bahasa
        $articles3 = \App\Article::where ('title','LIKE',"%Game%")->get(); //variabel pada sidebar artikel game
        $page = 'Artikel';
        return view('layout.manage',[
            'articles' => $articles,
            'articles2' => $articles2,
            'articles3' => $articles3,
            'page' => $page,
        ]);
    }
    public function add()
    {
        $articles = \App\Article::All();
        $articles2 = \App\Article::where ('title','LIKE',"%Bahasa%")->get(); //variabel pada sidebar artikel bahasa
        $articles3 = \App\Article::where ('title','LIKE',"%Game%")->get(); //variabel pada sidebar artikel game
        $page = 'Artikel';
        return view('layout.addarticle',[
            'articles' => $articles,
            'articles2' => $articles2,
            'articles3' => $articles3,
            'page' => $page,
        ]);
    }
    public function create(Request $request)
    {
        // \App\Data::create($request->all());
        // return redirect('/manage')->with('sukses','Data Berhasil Ditambah');
        \App\Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'feature_image' => $request->feature_image
        ]);
        return redirect('/manage');
    }
    public function edit($id)
    {
        $article = \App\Article::find($id);
        $articles2 = \App\Article::where ('title','LIKE',"%Bahasa%")->get(); //variabel pada sidebar artikel bahasa
        $articles3 = \App\Article::where ('title','LIKE',"%Game%")->get(); //variabel pada sidebar artikel game
        $page = 'Artikel';
        return view('layout.editarticle',[
            'article' => $article,
            'articles2' => $articles2,
            'articles3' => $articles3,
            'page' => $page,
        ]);
    }
    public function update($id, Request $request)
    {
        $article = \App\Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->feature_image = $request->image;
        $article->save();
        return redirect('/manage');
    }
    public function delete($id)
    {
        $article = \App\Article::find($id);
        $article->delete();
        return redirect('/manage');
    }
/*public function hal($id){
        return 'Halaman ID : '.$id;
    }
    public function __invoke(){
        return view('pages.article');
    }
    */
}
