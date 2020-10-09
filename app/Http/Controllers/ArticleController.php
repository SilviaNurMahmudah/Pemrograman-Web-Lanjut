<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article($id) {
    	return view("article", ["Id" => "20"]);
    }
}
