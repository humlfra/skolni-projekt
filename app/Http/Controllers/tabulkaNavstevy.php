<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class tabulkaNavstevy extends Controller {
    public function index() {
       $users = DB::select('select * from navstevy');
       return view('stud_view',['users'=>$users]);
    }
 }