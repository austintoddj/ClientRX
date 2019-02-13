<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show a user profile.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show(Request $request, $id)
    {
        $user = User::with('address', 'phoneNumber')->find($id);

        if ($user) {
            $data = [
                'user' => $user,
            ];

            return view('user.show', compact('data'));
        } else {
            abort(404);
        }
    }

    /**
     * Update a user profile.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(Request $request)
    {
        dd($request);
    }
}
