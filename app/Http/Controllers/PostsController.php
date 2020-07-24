<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth',['except' => ['create', 'store']]);
        $this->middleware('auth')->except('index', 'store', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('blog.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Filtering datas entered by user
        $data = request() -> validate([
            'title'=> 'required',
            'body'=> 'required'
        ]);

        //Saving the data to database
        $posts = new Post;
        $posts -> title = $request -> input ('title');
        $posts -> body = $request -> input ('body');
        $posts -> save();
        return redirect()->back()->with('success', 'Post Created Succesfuly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);
        return view('blog.show')->with('posts', $posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::find($id);
        return view('blog.edit')->with('posts', $posts);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Filtering datas entered by user
        $data = request() -> validate([
            'title'=> 'required',
            'body'=> 'required'
        ]);

        //Saving the data to database
        $posts = Post::find($id);
        $posts -> title = $request -> input ('title');
        $posts -> body = $request -> input ('body');
        $posts -> save();
        return redirect('blog')->with('success', 'Post Updated Succesfuly!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::find($id);
        $posts->delete();
        return redirect('blog')->with('success', 'Post Deleted!');
    }
}
