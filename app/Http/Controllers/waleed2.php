<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class waleed2 extends Controller
{
    public function walee($id){
        return view('index')->with('id',$id);
    }
}
