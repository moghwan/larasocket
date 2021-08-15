<?php

namespace App\Http\Controllers;

use App\Events\MsgSentEvent;
use Illuminate\Http\Request;

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
        return view('home');
    }

    public function messenger()
    {
        MsgSentEvent::dispatch('chi 7ed bgha y\'tconnecta');
        return view('messenger');
    }
}
