<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class tabulkapacientideleteController extends Controller
{
    public function index(){
        $pacienti = DB::select('select * from pacienti');
        return view('tabulka_pacienti_delete',['pacienti'=>$pacienti]);
        }
    public function show($id) {
        $pacienti = DB::select('select * from pacienti where  = ?',[$id]);
        return view('tabulka_pacienti_delete',['pacienti'=>$pacienti]);
        }

    public function destroy($id) {
        DB::delete('delete from pacienti where id_pacienta = ?',[$id]);
        
        return redirect('/tabulka_pacienti');
    }

    /* instance pro jen přihlášené */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
}