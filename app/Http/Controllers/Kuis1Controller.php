<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Reaction;
use App\User;

class Kuis1Controller extends Controller
{
    public function KuisHome() {
		$hasil = Article::all();
		return view('Kuis1Home',['Article'=> $hasil]);
    }
    public function KuisArticle($id) {
    	$Article = Article::find($id);
		return view('Kuis1Article',['Article'=>$Article]);
    }
    public function KuisAbout() {
    	$Reaction = Reaction::all();
    	return view('Kuis1About',['Reaction'=>$Reaction]);
    }
    public function KuisContact() {
    	return view('Kuis1Contact');
    }
}
