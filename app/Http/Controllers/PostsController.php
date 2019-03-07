<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostsController extends Controller
{
    //

    //make users be signed in before they can see any posts EXCEPT the index which is the main post feed - anyone can see that!
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }


    Public function index()

    {

        //fetch all posts
        $posts = Post::latest()->get();


        return view('posts.index', compact('posts'));

    }


    public function create(){
        //goes to the create new post view (create post form)
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    public function store(){

        //validate fields
        $this->validate(request(), [
            //use the following rules to validate the request
            'title' => 'required',
            'body' => 'required',
            'category' => 'required'

        ]);


        Post::create([

            'title'=> request('title'),
            'body' => request('body'),
            'category' => request('category'),


        ]);

        session()->flash(
            'message', 'Your post has now been published');


        //and then redirect to the home page
        return redirect('/');
    }


    //POSTS: display the 'are you sure you want to delete?' page
    public function delete($id)
    {
        $post = Post::find($id);

        return view('/posts/delete', compact('post'));
    }

    //POSTS: preform a SOFT delete
    public function destroy(Request $request, Post $post)
    {
        $id = $request->id;

        $post::destroy($id);

        return redirect('/');

    }
}
