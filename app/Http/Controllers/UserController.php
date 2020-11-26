<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cache;
use Auth;
use PDF;
date_default_timezone_set('Asia/Jakarta');
use Illuminate\Support\Facades\Gate;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(function($request, $next){
            if(Gate::allows('manage-articles'))return $next($request);
            abort(403,'Anda tidak memiliki cukup hak akses');
            //return redirect()->back();
        });
    }
    public function index()
    {
        $users = \App\User::All();
        $articles2 = \App\Article::where ('title','LIKE',"%Bahasa%")->get(); //variabel pada sidebar artikel bahasa
        $articles3 = \App\Article::where ('title','LIKE',"%Game%")->get(); //variabel pada sidebar artikel game
        $page = 'Manage User';
        return view('layout.manageuser',[
            'users' => $users,
            'articles2' => $articles2,
            'articles3' => $articles3,
            'page' => $page,
        ]);
    }
    public function add()
    {
        $users = \App\Article::All();
        $articles2 = \App\Article::where ('title','LIKE',"%Bahasa%")->get(); //variabel pada sidebar artikel bahasa
        $articles3 = \App\Article::where ('title','LIKE',"%Game%")->get(); //variabel pada sidebar artikel game
        $page = 'Manage User';
        return view('layout.adduser',[
            'users' => $users,
            'articles2' => $articles2,
            'articles3' => $articles3,
            'page' => $page,
        ]);
    }
    public function create(Request $request)
    {
        // \App\Data::create($request->all());
        // return redirect('/manage')->with('sukses','Data Berhasil Ditambah');
        if($request->file('image')){
            $image_name = $request->file('image')->store('images', 'public');
        }
        \App\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'roles' => $request->roles,
            'profile' => $image_name,
        ]);
        return redirect('/manageuser');
    }
    public function edit($id)
    {
        $users = \App\User::find($id);
        $articles2 = \App\Article::where ('title','LIKE',"%Bahasa%")->get(); //variabel pada sidebar artikel bahasa
        $articles3 = \App\Article::where ('title','LIKE',"%Game%")->get(); //variabel pada sidebar artikel game
        $page = 'Manage User';
        return view('layout.edituser',[
            'users' => $users,
            'articles2' => $articles2,
            'articles3' => $articles3,
            'page' => $page,
        ]);
    }
    public function update($id, Request $request)
    {
        $users = \App\User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->roles = $request->roles;
        if($users->profile && file_exists(storage_path('app/public/' . $users->profile))){
            \Storage::delete('public/'.$user->profile);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $users->profile = $image_name;
        $users->save();
        return redirect('/manageuser');
    }
    public function delete($id)
    {
        $users = \App\User::find($id);
        $users->delete();
        return redirect('/manageuser');
    }
    public function cetak_pdf(){
        $users = \App\User::all();
        $pdf = PDF::loadview('layout.user_pdf',
            [
                'users'=>$users
            ]);
        return $pdf->stream();
       }
}
