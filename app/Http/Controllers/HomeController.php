<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
    public function dashboard(){
       $user_id=Auth::user()->id;
       $posts = User::findOrFail($user_id)->postings()->paginate(10);
       
      
        return view('dashboard',compact('posts'));
    }
    public function editPosting($id){
        
    }
}