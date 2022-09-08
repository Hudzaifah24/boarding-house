<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ForgotPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    public function forgotPassword()
    {
        return view('pages.auth.passwords.email');
    }

    public function forgotPasswordProcess(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user) {
            if (!$user->email_verified == NULL) {
                $user->update([
                    'my_token' => mt_rand(10000, 99999),
                ]);

                $details = [
                    'title' => 'Mail from Boarding House',
                    'body'  => 'This is page for verification your email, Reset Your Password',
                    'email' => $user->email,
                    'token' => $user->my_token,
                ];

                Mail::to($user->email)->send(new ForgotPasswordMail($details));
            } else {
                return redirect()->back();
            }
        }

        return redirect()->route('forgot.password.confirm.email', $user->id);
    }

    public function confirmEmail($id)
    {
        return view('pages.auth.passwords.confirm', compact('id'));
    }

    public function resendConfirmEmail(Request $request)
    {
        $user = User::findOrFail($request->id);

        if (!$user->email_verified == NULL) {
            $user->update([
                'my_token' => mt_rand(10000, 99999),
            ]);

            $details = [
                'title' => 'Mail from Boarding House',
                'body' => 'This is page for verification your email, Reset Your Password',
                'email' => $user->email,
                'token' => $user->my_token,
            ];

            Mail::to($user->email)->send(new ForgotPasswordMail($details));
        } else {
            return redirect()->back();
        }

        return redirect()->back();
    }

    public function createToken(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if ($user->my_token == $request->my_token) {
            return redirect()->route('reset.password', $user->email);
        }

        return back()->with('error', 'Kode OTP Salah');
    }

    public function resetPassword($email)
    {
        return view('pages.auth.passwords.reset', compact('email'));
    }

    public function resetPasswordProcess(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        $request->validate([
            'password' => 'required|confirmed'
        ]);

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login');
    }

    // API
    public function autoResetToken($id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'my_token' => Hash::make($user->my_token),
        ]);
    }
}
