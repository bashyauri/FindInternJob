<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(){
        $categories=Category::all();
        return view('welcome',compact('categories'));
    }
    public function category($id){
        
        $posts = Category::find($id)->postings()->paginate(4);
        $categories=Category::all();
        return view('postings',compact('posts','categories'));

    }
}