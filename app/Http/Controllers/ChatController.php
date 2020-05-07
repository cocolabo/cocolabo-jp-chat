<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ChatController extends Controller
{
    public function index(Request $request): View
    {
        return view('chats.index', [
            'userName' => $request->input('user_name', 'anonymous'),
        ]);
    }
}
