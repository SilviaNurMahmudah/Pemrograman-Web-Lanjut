<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reaction;
use App\User;
use Illuminate\Support\Facades\Gate;
use PDF;

class ReactionController extends Controller
{
    public function create(Request $request) {
        Reaction::create([
        'name' => $request->name,
        'content' => $request->content,
        ]);
        return redirect('/home');
    }
    public function delete($id){
        $reaction = Reaction::find($id);
        if(empty($reaction)) {
            return;
        }
        $reaction->delete();
        return redirect('/manage');
    }
    public function cetak_pdf(){
        $reaction = Reaction::all();
        $pdf = PDF::loadview('reaction_pdf',['reaction'=>$reaction]);
        return $pdf->stream();
    }
    public function __construct() {
        //$this->middleware('auth');
        $this->middleware(function($request, $next){
            if(Gate::allows('manage-articles')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
}
