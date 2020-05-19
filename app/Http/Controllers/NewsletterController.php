<?php

namespace App\Http\Controllers;

use App\Newsletter;
use App\Mail\NewsletterMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\NewsletterRequest;

class NewsletterController extends Controller
{
    function newsletter(NewsletterRequest $request)
    {   $newsletter=new Newsletter();
        $newsletter->email=$request->input('email');
        $newsletter->checkbox=$request->input('checkbox');
        $newsletter->save();
        $email=$request->input('email');
        $email=compact('email');
     

        Mail::to('admin.presto@presto.com')->send(new NewsletterMail($email));
        return redirect(route('newsletter.thankyou'));
    }
    function thankyounewsletter()
    {
        return view('thank_you_newsletter');
    }
}
