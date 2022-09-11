<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {

        return User::create($request->validated());
    }
}
