<?php


namespace TotalinfoTech\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use TotalinfoTech\Contact\Mail\ContactMailable;
use TotalinfoTech\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request) 
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message));
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}