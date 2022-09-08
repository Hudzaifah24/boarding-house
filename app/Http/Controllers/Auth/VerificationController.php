<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerifiedMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VerificationController extends Controller
{
    public function verified($id)
    {
        return view('pages.auth.verify', compact('id'));
    }

    public function verifiedEmail(Request $request)
    {
        $user = User::findOrFail($request->id);

        $details = [
            'title' => 'Mail from Boarding House',
            'body' => 'This is page for verification your email',
            'email' => $user->email,
        ];

        Mail::to($user->email)->send(new VerifiedMail($details));

        return back();
    }

    public function confirmedEmail($email)
    {
        $user = User::where('email', $email)->first();

        if ($user->email_verified == NULL) {
            $user->update([
                'email_verified' => Carbon::now(),
            ]);
        }

        return redirect()->route('login');
    }
}
