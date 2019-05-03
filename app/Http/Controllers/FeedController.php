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
        return view('feed.index');
    }
}
