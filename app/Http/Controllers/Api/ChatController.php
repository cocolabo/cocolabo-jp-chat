<?php

namespace App\Http\Controllers\Api;

use App\Events\ChatPublicEvent;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    public function store()
    {
//        event(new ChatPublicEvent('テストメッセージ'));
//        return dd(redirect('chats.index'));
    }
}
