<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function create(){
        return view('contacts.create');
    }
    public function store (Request $request){
        Mail::to('patripmg4@gmail.com')->send(new ContactMail($request->name, $request->email, $request->description));

        return back()-> with('success', 'Mensaje enviado correctamente');
    }
}
