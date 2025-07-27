<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function index()
    {
        $url = 'https://jsonplaceholder.typicode.com/posts';

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
        ]);

        $response = curl_exec($curl);

        if (curl_errno($curl)) {
            return "cURL Error: " . curl_error($curl);
        }

        curl_close($curl);

        // Parse JSON
        $posts = json_decode($response, true);

        return view('home', compact('posts'));
    }
}
