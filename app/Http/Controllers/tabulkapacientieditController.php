<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class tabulkapacientieditController extends Controller
{
    public function index(){
        $pacienti = DB::select('select * from pacienti');
        return view('tabulka_pacienti_edit',['pacienti'=>$pacienti]);
        }
    public function show($id) {
        $pacienti = DB::select('select * from pacienti where id_pacienta = ?',[$id]);
        return view('tabulka_pacienti_update',['pacienti'=>$pacienti]);
        }

    public function edit(Request $request,$id) {
        $jmeno = $request->input('jmeno');
        $prijmeni = $request->input('prijmeni');
        $rodne_cislo = $request->input('rodne_cislo');
        $cislo_pojistovny = $request->input('cislo_pojistovny');
        $samoplatce = $request->input('samoplatce');
        DB::update('update pacienti set jmeno = ?,prijmeni=?,rodne_cislo=?,cislo_pojistovny=?,samoplatce=? where id_pacienta = ?',
        [$jmeno,$prijmeni,$rodne_cislo,$cislo_pojistovny,$samoplatce,$id]);
        
        return redirect('/tabulka_pacienti');
    }

    /* instance pro jen přihlášené */
    public function __construct()
    {
        $this->middleware('auth');
    }

    

}