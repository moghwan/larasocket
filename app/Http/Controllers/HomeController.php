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
        // event(new MsgSentEvent('ta hada message'));
        MsgSentEvent::dispatch('ta hada message');
        return view('messenger');
    }
}
