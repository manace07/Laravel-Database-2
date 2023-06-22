<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    public function showResetForm(Request $request)
    {
        return view('reset', ['token' => $request->token]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $credentials = $request->only('email', 'password', 'password_confirmation', 'token');

        $status = Password::reset($credentials, function ($user, $password) {
            $user->forceFill([
                'password' => bcrypt($password),
                'remember_token' => \Illuminate\Support\Str::random(60),
            ])->save();
        });

        if ($status === Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('success', 'Your password has been reset successfully.');
        } else {
            return redirect()->back()->withErrors(['email' => trans($status)]);
        }
    }
}

?>