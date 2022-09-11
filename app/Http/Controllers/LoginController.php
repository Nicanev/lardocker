<?php

namespace App\Http\Controllers;

use App\Http\Resources\LoginResource;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('phone', $request->phone)->where('password', $request->password)->first();
        $user->api_token = Str::random(32);
        $user->save();
        return LoginResource::make($user);
    }
}
