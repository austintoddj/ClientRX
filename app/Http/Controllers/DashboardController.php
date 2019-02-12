<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __invoke()
    {
        $data = [
            'user' => auth()->user()
        ];

        return view('dashboard.index', compact('data'));
    }
}
