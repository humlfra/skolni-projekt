<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class tabulkanavstevyinsertController extends Controller
{
    public function insertform() {
        return view('tabulka_navstevy_insert');
     }
      
     public function insert(Request $request) {
        $rodne_cislo = $request->input('rodne_cislo');
        $popis = $request->input('popis');
        $datum_navstevy = $request->input('datum_navstevy');
        $cas_navstevy = $request->input('cas_navstevy');
        DB::insert('insert into navstevy (rodne_cislo, popis, datum_navstevy, cas_navstevy) values(?, ?, ?, ?)',[$rodne_cislo, $popis, $datum_navstevy, $cas_navstevy]);

        return redirect('/tabulka_navstevy');
     }


     /* instance pro jen přihlášené */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
}