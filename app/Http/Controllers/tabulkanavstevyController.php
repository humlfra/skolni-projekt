<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class tabulkanavstevyController extends Controller
{
    public function index(){
        $navstevy = DB::select('select * from navstevy');
        return view('tabulka_navstevy',['navstevy'=>$navstevy]);
        }
    
    /* instance pro jen přihlášené */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
}