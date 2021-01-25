<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showartikel($id){
    return view ('showartikel', ['id' => $id]);
    }

    // public function showcategory($category){
    // return view ('showartikel', ['category' => $category]);
    // }
}
