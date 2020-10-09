<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function welcome() {
		return "Selamat Datang";
	}
    public function about() {
    	return "1931710054 - Silvia Nur Mahmudah";
    }
    public function articles($id) {
    	return "Halaman Artikel dengan id : ".$id;
    }
}
