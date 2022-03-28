<?php

namespace App\Http\Controllers;

// CR :: uses die je niet gebruikt opruimen
use Illuminate\Http\Request;
use App\Services\Newsletter;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate(['email' => 'required|email']);

        try {
            (new Newsletter())->subscribe(request('email'));
        } catch (Exception $e) {
            throw ValidationException::withMessages([
                'email' => 'This email could not be added to our newsletter list.'
            ]);
        }

        return redirect()->back()->with('success', 'You are now signed up for our newsletter!');
    }
}
