<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class tabulkapojistovnyeditController extends Controller
{
   public function index() {
      $pojistovny = DB::select('select * from pojistovny');
      return view('tabulka_pojistovny_edit',['pojistovny'=>$pojistovny]);
   }
   public function show($id) {
      $pojistovny = DB::select('select * from pojistovny where id_pojistovny = ?',[$id]);
      return view('tabulka_pojistovny_update',['pojistovny'=>$pojistovny]);
   }
   public function edit(Request $request,$id) {
      $nazev_pojistovny = $request->input('nazev_pojistovny');
      $cislo_pojistovny = $request->input('cislo_pojistovny');
      DB::update('update pojistovny set nazev_pojistovny = ?, cislo_pojistovny = ? where id_pojistovny = ?',[$nazev_pojistovny,$cislo_pojistovny, $id]);
      echo "Úspěšně změněno.<br/>";
      echo '<a href = "/tabulka_pojistovny_edit/">Click Here</a> to go back.';
   }

   /* instance pro jen přihlášené */
   public function __construct()
   {
       $this->middleware('auth');
   }
   
}