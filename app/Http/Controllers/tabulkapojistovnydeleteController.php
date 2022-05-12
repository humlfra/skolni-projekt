<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class tabulkapojistovnydeleteController extends Controller
{
    public function index(){
        $pojistovny = DB::select('select * from pojistovny');
        return view('tabulka_pojistovny_delete',['pojistovny'=>$pojistovny]);
        }
    public function show($id) {
        $pojistovny = DB::select('select * from pojistovny where  = ?',[$id]);
        return view('tabulka_pojistovny_delete',['pojistovny'=>$pojistovny]);
        }

    public function destroy($id) {
        DB::delete('delete from pojistovny where id_pojistovny = ?',[$id]);
        
        return redirect('/tabulka_pojistovny');
    }
    
    /* instance pro jen přihlášené */
    public function __construct()
    {
        $this->middleware('auth');
    }

}