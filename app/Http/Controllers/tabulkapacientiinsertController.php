<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class tabulkapacientiinsertController extends Controller
{
    public function insertform() {
        return view('tabulka_pacienti_insert');
     }
      
     public function insert(Request $request) {
        $jmeno = $request->input('jmeno');
        $prijmeni = $request->input('prijmeni');
        $rodne_cislo = $request->input('rodne_cislo');
        $cislo_pojistovny = $request->input('cislo_pojistovny');
        $samoplatce = $request->input('samoplatce');
        DB::insert('insert into pacienti (jmeno, prijmeni, rodne_cislo, cislo_pojistovny, samoplatce) values(?, ?, ?, ?, ?)',[$jmeno, $prijmeni, $rodne_cislo, $cislo_pojistovny, $samoplatce]);

        return redirect('/tabulka_pacienti');
     }


     /* instance pro jen přihlášené */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
}