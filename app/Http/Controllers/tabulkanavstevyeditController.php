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
        /*$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);*/
        /*DB::table('student')->update($data);*/
        /* DB::table('student')->whereIn('id', $id)->update($request->all());*/
        DB::update('update student set first_name = ?,last_name=?,city_name=?,email=? where id = ?',[$first_name,$last_name,$city_name,$email,$id]);
        echo "Record updated successfully.";
        
        echo 'Click Here to go back.';
        }

}