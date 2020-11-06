<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Reaction;
use Illuminate\Support\Facades\Gate;

class ArticleController extends Controller
{
    // public function article($id) {
    // 	return view("article", ["Id" => "20"]);
    // }

    public function index() {
        $article = Article::all();
        $reaction = Reaction::all();
        return view('manage',['article' => $article],['reaction' => $reaction]);
    }

    public function add(){
        return view('addArticle');
    }
    public function create(Request $request) {
        Article::create([
        'title' => $request->title,
        'content' => $request->content,
        'imageUrl' => $request->image
        ]);
        return redirect('/manage');
    }

    public function edit($id) {
        $article = Article::find($id);
        return view('editArticle',['article'=>$article]);
    }
    public function update($id, Request $request) {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->imageUrl = $request->image;
        $article->save();
        return redirect('/manage');
    }
    
    public function delete($id){
        $article = Article::find($id);
        $article->delete();
        return redirect('/manage');
    }

    public function create2(Request $request) {
        Reaction::create([
        'name' => $request->name,
        'content' => $request->content,
        ]);
        return redirect('/home');
    }
    public function delete2($id){
        $reaction = Reaction::find($id);
        if(empty($reaction)) {
            return;
        }
        $reaction->delete();
        return redirect('/manage');
    }
    public function __construct() {
        //$this->middleware('auth');
        $this->middleware(function($request, $next){
        if(Gate::allows('manage-articles')) return $next($request);
        abort(403, 'Anda tidak memiliki cukup hak akses');
    });
}


}
