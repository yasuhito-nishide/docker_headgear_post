<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('/headgearContact');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'title' => 'required',
            'body' => 'required',
        ]);

        $inputs = $request->all();
        return view('/contactConfirm',[
            'inputs' => $inputs,
        ]);
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'title' => 'required',
            'body' => 'required'
        ]);
        $action = $request->input('action');
        $inputs = $request->except('action');

        if($action !== 'submit') {
            return redirect()
            ->route('contact.index')
            ->withInput($inputs);
        }else{
            return view('contact.thanks');
        }
    }
}
