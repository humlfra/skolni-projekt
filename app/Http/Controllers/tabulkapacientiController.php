<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class tabulkapacientiController extends Controller
{
    public function index(){
        $pacienti = DB::select('select * from pacienti');
        return view('tabulka_pacienti',['pacienti'=>$pacienti]);
        }

    public function __construct()
    {
        $this->middleware('auth');
    }
}