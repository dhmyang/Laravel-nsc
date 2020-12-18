<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu(){
        return view ('menu');
    }

    // public function item($id, Request $request){
    //     dd();
    //     return 'parameter show_form get = '. $request->get('show_form');
    //     return view ('menu', ['id'=>$id]);
    // }
}
