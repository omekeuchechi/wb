<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);
        return view('home', ['user' => $user]);
    }
    public function dashboard($item)
    {
        $user = User::find(Auth::user()->id);
        // $item = Course::find($item);
        return view('course.dashboard', ['item' => $item,
        'user' => $user]);
    }
}
