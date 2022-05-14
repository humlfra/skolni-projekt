<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class tabulkanavstevyeditController extends Controller
{
    public function index(){
        $navstevy = DB::select('select * from navstevy');
        return view('tabulka_navstevy_edit',['navstevy'=>$navstevy]);
        }
    public function show($id) {
        $navstevy = DB::select('select * from navstevy where id_navstevy = ?',[$id]);
        return view('tabulka_navstevy_update',['navstevy'=>$navstevy]);
        }

    public function edit(Request $request,$id) {
        $popis = $request->input('popis');
        $rodne_cislo = $request->input('rodne_cislo');
        $datum_navstevy = $request->input('datum_navstevy');
        $cas_navstevy = $request->input('cas_navstevy');
        DB::update('update navstevy set popis = ?,rodne_cislo=?,datum_navstevy=?, cas_navstevy=? where id_navstevy = ?', [$popis,$rodne_cislo,$datum_navstevy,$cas_navstevy,$id]);
        
        return redirect('/tabulka_navstevy');
    }

    /* instance pro jen přihlášené */
    public function __construct()
    {
        $this->middleware('auth');
    }

    

}