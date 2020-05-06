<?php

namespace App\Http\Controllers\Api;

use App\Events\ChatPublicEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ChatController extends Controller
{
    public function store(Request $request): Response
    {
        event(new ChatPublicEvent($request->user_id, $request->user_name, $request->message));
        return response(null, 204);
    }
}
