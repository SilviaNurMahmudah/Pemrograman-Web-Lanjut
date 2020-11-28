<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Gate;
use PDF;

class UserController extends Controller
{
    public function index() {
        $user = User::all();
        return view('manageUser', ['user' => $user]);
    }
    public function cetak_pdf(){
        $user = User::all();
        $pdf = PDF::loadview('user_pdf',['user'=>$user]);
        return $pdf->stream();
    }
    public function delete($id){
        $user = User::find($id);
        if(empty($user)) {
            return;
        }
        $user->delete();
        return redirect('/manage');
    }
    public function pp($id) {
    	$user = User::find($id);
		return view('profil',['user'=>$user]);
    }

    public function update($id, Request $request){
        $user = User::find($id);
        
        if($user->profilUrl && file_exists(storage_path('app/public/' . $user->profilUrl)))
        {
        \Storage::delete('public/'.$user->profile);
        }
        
        $image_name = $request->file('image')->store('images', 'public');
        $user->profilUrl = $image_name;

        $user->save();

        return redirect('/manageUser');
    }
    public function __construct() {
        //$this->middleware('auth');
        $this->middleware(function($request, $next){
            if(Gate::allows('manage-articles')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
}

        