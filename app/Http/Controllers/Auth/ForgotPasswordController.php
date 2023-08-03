<?php

namespace App\Http\Controllers\Auth;

use App\Events\ForgotPasswordTokenRequested;
use App\Exceptions\UserNotFoundException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ForgotPasswordRequest;
use Illuminate\Http\Request;
use App\Models\User;

class ForgotPasswordController extends Controller
{
    public function __invoke(ForgotPasswordRequest $request)
    {
        $input = $request->validated();

        $user = User::query()
        ->whereEmail($input['email'])
        ->first();

        if(!$user){
            throw new UserNotFoundException();
        }

        ForgotPasswordTokenRequested::dispatch($user);
    }
}