<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function sendMessage(Request $request)
    {
        $client = new Client();
        dd("dasd");
        $response = $client->post('http://localhost:3000/chat', [
            'json' => [
                'message' => $request->input('message'),
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        $botResponse = isset($data['response']) ? $data['response'] : "Maaf, kami belum bisa memahami maksud Anda.";

        return response()->json([
            'response' => $botResponse
        ]);
    }
}
