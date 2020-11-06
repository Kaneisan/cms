<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class DataController extends Controller
{

    public function __invoke(){
        if(Auth::check()){

        }else{
            return redirect('login')->with('alert','Login First');
        }
        $data_siswa = \App\Data::All();
        $page = "Data";
        $articles2 = \App\Article::where ('title','LIKE',"%Bahasa%")->get(); //variabel pada sidebar artikel bahasa
        $articles3 = \App\Article::where ('title','LIKE',"%Game%")->get(); //variabel pada sidebar artikel Game
        return view('layout.data',[
            'data_siswa' => $data_siswa,
            'page' => $page,
            'articles2' => $articles2,
            'articles3' => $articles3,
        ]);
    }
    public function create(Request $request){
        \App\Data::create($request->all());
        return redirect('/data')->with('sukses','Data Berhasil Ditambah');
    }
    public function edit($id){
        $siswa = \App\Data::find($id);
        // dd($data_siswa);
        $page = "Data";
        $articles2 = \App\Article::where ('title','LIKE',"%Bahasa%")->get(); //variabel pada sidebar artikel bahasa
        $articles3 = \App\Article::where ('title','LIKE',"%Game%")->get(); //variabel pada sidebar artikel Game
        return view('layout.edit',[
            'siswa' => $siswa,
            'page' => $page,
            'articles2' => $articles2,
            'articles3' => $articles3,
        ]);

    }
    public function update(Request $request, $id){
        $siswa = \App\Data::find($id);
        $siswa->update($request->all());
        return redirect('/data')->with('sukses','Data Berhasil Diupdate');
    }
    public function delete($id){
        $siswa = \App\Data::find($id);
        $siswa->delete();
        return redirect('/data')->with('sukses','Data Berhasil Dihapus');
    }
}
