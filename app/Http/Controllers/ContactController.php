<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactSendmail;
use Mail;


class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'title' => 'required',
            'body' => 'required',
        ]);

        $inputs = $request->all();

        return view('contact.confirm',[
            'inputs' => $inputs,
        ]);
    }

    public function send(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'title' =>'required',
            'body' => 'required'
        ]);

        $action =$request->input('action');

        $inputs = $request->except('action');

        if($action !== 'submit'){
            return redirect()->route('contact.index')->withInput($inputs);

        } else {
            //入力されたメールアドレスにメールを送信
            Mail::to($inputs['email'])->send(new ContactSendmail($inputs));

            //再送信を防ぐためにトークンを再発行
            $request->session()->regenerateToken();

            //送信完了ページのviewを表示
            return view('contact.thanks');
        }
    }
}