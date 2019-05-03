<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Helpers\Utilities\Stopwatch;

class SearchController extends Controller
{
    /**
     * Show the results of the search.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // Initialize the results collection
        $results = collect();

        // Start a search timer
        StopWatch::start();

        // Search the User models
        $users = User::search(request('search'))->get();
        foreach ($users as $user) {
            $results->push($user);
        }

        // Get the execution time for the search
        $timer = StopWatch::elapsed();

        $data = [
            'query'         => request('search'),
            'response_time' => $timer,
            'results'       => $results,
        ];

        return view('search.index', compact('data'));
    }
}
