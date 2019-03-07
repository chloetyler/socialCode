<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //ADMIN: display all users
    public function index()
    {
        $categories = Category::all();

        return view('posts/categories', compact('categories'));
    }

//    public function search()
//    {
//        $categories = Category::find($id);
//
//        return view('posts/categories', compact('categories'));
//    }

    public function show($cat)

    {
        $posts = DB::table('posts')->where('category', $cat)->get();

        return view('posts/postsByCat', compact('posts'));
    }

}
