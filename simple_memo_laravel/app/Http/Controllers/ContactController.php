<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function index()
    {
        return view('/headgearContact');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'tel'=>'nullable|numeric',
            'gender'=>'required',
            'contents'=>'required',
        ]);

        $inputs = $request->all();
        return view('contactConfirm',['inputs' => $inputs]);
    }

    public function process(Request $request)
    {
        $action = $request->get('action','return');
        $input = $request->except('action');

        if($action === 'submit'){
            // DBに保存
            $contact = new Contact();
            $contact->fill($input);
            $contact->save();

            // メール送信
            Mail::to($input['email'])->send(new ContactMail('mails.contact','お問い合わせありがとうございます',$input));
            return redirect()->route('complete');
        } else {
            return redirect()->route('contact')->withInput($input);
        }

    }

    public function complete()
    {
        return view('contactComplete');
    }
}
