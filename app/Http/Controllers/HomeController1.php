<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class HomeController1 extends Controller
{
 //    public function home() {
	// 	return view("home", ["name" => "Silvia"]);
	// }

	// public function homeIdx() {
	// 	return view("HomeIndex");
	// }

	// public function post() {
	// 	return view("post");
	// }

	public function __invoke() {
		$ArticleAll = Article::all();
		$articles = json_decode(json_decode($ArticleAll));
		return view('HomeIndex')->with(compact('ArticleAll'));

		$value = Cache::rememberForever('articles',function(){
			return \App\articles::all();
		});
	}

	public function getAll(){
 		$Article = Article::all();
 		return view('HomeIndex',['Article'=> $Article]);
 		$value = Cache::rememberForever('Article', function(){
 			return DB::table('Article') -> get();
 		}); 
 	}
 	// public function __invoke(Request $request) {
 	// 	$Article = \App\Article::all();
 	// 	$value = Cache::rememberForever('artcles', function(){
 	// 		return \App\Article::all();
 	// 	})
 	// 	$page = 'Article';
 	// 	return view('dataHome',['Article'=> $Article],['halaman'=>$page]);
 	// }
 	public function getById($id){
 		$Article = Article::find($id);
 		return view('post',['Article'=> $Article],['id'=> $id]);
 		$value = Cache::remember('Article', 20 , function(){
 			return DB::table('Article') -> get();
 		});
 	}
}
