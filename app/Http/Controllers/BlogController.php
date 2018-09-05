<?php

namespace App\Http\Controllers;

use App\Blog;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth')->except('index', 'show');
     }

    public function index()
    {
        $b = 'blogs';
        $u = 'users';
        $p = 'photos';
        $posts = DB::table($u)->select($b.'.id', $b.'.user_id', $b.'.title', $b.'.created_at', $u.'.first_name', $u.'.last_name', $p.'.path')
        ->join($b, $u.'.id', '=', $b.'.user_id')
        ->join($p, $b.'.user_id', '=', $p.'.user_id')
        ->orderBy($b.'.created_at', 'desc')
        ->simplePaginate(5);
        return view('blog.all', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('blog.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //Validation
      $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required',
      ]);

      $user = Auth::user();

      $blog = new Blog;
      $blog->title = $request->title;
      $blog->content = $request->content;
      $blog->user_id = $user->id;
      $blog->save();

      //Set flash message
      Session::flash('success', 'Article Created!');

      //Redirection
      return redirect()->route('my_account');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('blog.single', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
