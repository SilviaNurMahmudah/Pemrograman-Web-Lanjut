<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Reaction;
use Illuminate\Support\Facades\Gate;
use PDF;

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
        if($request->file('image')){
            $image_name = $request->file('image')->store('images','public');
        }
           
        Article::create([
        'title' => $request->title,
        'content' => $request->content,
        'imageUrl' => $image_name,
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

        if($article->imageUrl && file_exists(storage_path('app/public/' . $article->imageUrl))){
            \Storage::delete('public/'.$article->imageUrl);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $article->imageUrl = $image_name;

        $article->save();
        return redirect('/manage');
    }
    
    public function delete($id){
        $article = Article::find($id);
        $article->delete();
        return redirect('/manage');
    }

    public function cetak_pdf(){
        $article = Article::all();
        $pdf = PDF::loadview('articles_pdf',['article'=>$article]);
        return $pdf->stream();
    }
   
}
