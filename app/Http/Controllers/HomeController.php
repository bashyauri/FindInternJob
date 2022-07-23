<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Postings;



use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $categories=Category::all();
        return view('welcome',compact('categories'));
    }
    public function category($id){

        
        $posts = Category::find($id)->postings()->paginate(4);// get postings with pagination
        $categories=Category::all(); // get all categories
        return view('postings',compact('posts','categories'));

    }
    public function dashboard(){
       $user_id=Auth::user()->id;
       $posts = User::findOrFail($user_id)->postings()->latest()->paginate(4); 
       $categories = Category::all(); // get all categories
       
      
        return view('dashboard',compact('posts','categories'));
    }
    public function editPosting($id){
        $post = Postings::findOrFail($id); // find Postings or throw errow
        $categories = Category::all(); // get all categories
        return view('edit-posting', compact('post','categories'));
        
    }
    // Insert allowed_methods
    public function insertPostings(Request $request){
        $validated = $request->validate([
            'title' => ['required'],
            'category_id' => ['required'],
            'address' => ['required'],
            'requirements' => ['required']
        ]);
        $postings = new Postings;
 
        $postings->title = $request->title;
        $postings->address = $request->address;
        $postings->requirements = $request->requirements;
        $postings->user_id = Auth::user()->id;
        $postings->category_id = $request->category_id;
 
        $postings->save();
       
       
        return redirect('dashboard')->with('status', 'Postings Inserted!');
    }
    public function updatePostings(Request $request,$id){
        $validated = $request->validate([
            'title' => ['required'],
            'category_id' => ['required'],
            'address' => ['required'],
            'requirements' => ['required']
        ]);
        $postings = Postings::find($id);
 
        $postings->title = $request->title;
        $postings->address = $request->address;
        $postings->requirements = $request->requirements;
        $postings->user_id = Auth::user()->id;
        $postings->category_id = $request->category_id;
        $postings->save();

        return redirect('dashboard')->with('status', 'Postings Updated !');
    }
}