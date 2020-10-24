<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Reaction;

class Kuis1Controller extends Controller
{
    public function KuisHome() {
    	$hasil = Article::all();
		return view('Kuis1Home',['Article'=> $hasil]);
		 
   //  	$hasil = Article::all();
   //  	$articles = json_decode(json_encode($hasil));
   //  	return view('KuisHome')->with(compact($hasil));
   //  	$value = Cache::remember('Article',function(){
 		// 	return \App\Article::all();
 		// });
    }
    public function KuisArticle($id) {
    	$Article = Article::find($id);
		return view('Kuis1Article',['Article'=>$Article]);
		 
    	// $hasil = Article::find($id);
    	// $hasil = json_decode(json_encode($hasil));
 		// return view('Kuis1Article',['id'->$id],['Article'=> $hasil]);
 		// $value = Cache::remember('Article',function(){
 		// 	return \App\Article::all();
 		// });
    }
    public function KuisAbout() {
    	$Reaction = Reaction::all();
    	return view('Kuis1About',['Reaction'=>$Reaction]);
    }
    public function KuisContact() {
    	return view('Kuis1Contact');
    }
}
