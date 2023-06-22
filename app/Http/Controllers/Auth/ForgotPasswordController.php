<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    // ...

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink($request->only('email'));

        if ($status === Password::RESET_LINK_SENT) {
            return back()->with('status', 'Password reset link sent!');
        }

        return back()->withErrors(['email' => trans($status)]);
    }

    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    use SendsPasswordResetEmails;
    // ...
}
?>