<?php

namespace App\Http\Controllers;

class ChatsController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth', 'verified']);
    }

    // show chats
    public function index()
    {
        return view('pages.chats');
    }
}
