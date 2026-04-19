<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        return response()->json(Message::all());
    }

    public function show($id)
    {
        return response()->json(Message::findOrFail($id));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $message = Message::create($data);

        return response()->json([
            'message' => 'Message stored successfully',
            'data' => $message
        ], 201);
    }

    public function destroy($id)
    {
        Message::destroy($id);

        return response()->json([
            'message' => 'Message deleted'
        ]);
    }
}