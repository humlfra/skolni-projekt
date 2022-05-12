<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class tabulkapojistovnyController extends Controller
{
    public function index(){
        $pojistovny = DB::select('select * from pojistovny');
        return view('tabulka_pojistovny',['pojistovny'=>$pojistovny]);
        }
    
    /* instance pro jen přihlášené */
    public function __construct()
    {
        $this->middleware('auth');
    }
}