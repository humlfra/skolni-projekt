<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class tabulkanavstevydeleteController extends Controller
{
    public function index(){
        $navstevy = DB::select('select * from navstevy');
        return view('tabulka_navstevy_delete',['navstevy'=>$navstevy]);
        }
    public function show($id) {
        $navstevy = DB::select('select * from navstevy where  = ?',[$id]);
        return view('tabulka_navstevy_delete',['navstevy'=>$navstevy]);
        }

    public function destroy($id) {
        DB::delete('delete from navstevy where id_navstevy = ?',[$id]);
        
        return redirect('/tabulka_navstevy');
    }

    /* instance pro jen přihlášené */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
}