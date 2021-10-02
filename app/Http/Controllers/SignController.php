<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use App\Http\Requests\UpRequest;
use App\Models\User;

class SignController extends Controller
{
    public function up(UpRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);

        // event(new Registered($user));

        return redirect()->route('account.dashboard');
    }

    public function in(Request $request)
    {}
}
