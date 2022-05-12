<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class tabulkapojistovnyinsertController extends Controller
{
    public function insertform() {
        return view('tabulka_pojistovny_insert');
     }
      
     public function insert(Request $request) {
        $nazev_pojistovny = $request->input('nazev_pojistovny');
        $cislo_pojistovny = $request->input('cislo_pojistovny');
        DB::insert('insert into pojistovny (nazev_pojistovny, cislo_pojistovny) values(?, ?)',[$nazev_pojistovny, $cislo_pojistovny]);

        return redirect('/tabulka_pojistovny');
     }


     /* instance pro jen přihlášené */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
}