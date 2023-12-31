<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaravelCrud extends Controller
{
    function index(){
$data = array(
        'list'=> DB::table('crud')-> get()
    );
        return view('crud.index', $data);

    }

    function add(Request $request){

        $request->validate([
            'name'=>'required',
            'nrp'=>'required|gt:0',
            'email'=>'required|email|unique:crud'
        ]);

        $query = DB::table('crud')->insert([
            'name'=>$request->input('name'),
            'nrp'=>$request->input('nrp'),
            'email'=>$request->input('email'),
            'created_at'=>now(),
            'updated_at'=>now()
        ]);

        if($query){
            return back()->with('success', 'Data have been successfully inserted');
        }else{
            return back()->with('fail', 'something went wrong');
        }
    }
}
