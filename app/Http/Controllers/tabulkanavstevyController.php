<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class tabulkanavstevyController extends Controller
{
    public function index(){
        $navstevy = DB::select('select * from navstevy');
        return view('tabulkanavstevy',['navstevy'=>$navstevy]);
        }
}