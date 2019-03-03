<?php

namespace App\Http\Controllers;

class FeedController extends Controller
{
    /**
     * Show the news feed.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __invoke()
    {
        $data = [
            'user' => auth()->user(),
        ];

        return view('feed.index', compact('data'));
    }
}
