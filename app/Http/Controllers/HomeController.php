<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b = 'blogs';
        $u = 'users';
        $posts = DB::table($u)->select($b.'.id', $b.'.user_id', $b.'.title', $b.'.created_at', $u.'.first_name', $u.'.last_name')
        ->join($b, $u.'.id', '=', $b.'.user_id')
        ->get();
        return view('welcome', compact('posts'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

}
