<?php

namespace App\Http\Controllers;
use Mail;
use Session;
use Redirect;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function store(Request $request)
    {
    	Mail::send('emails.contact', $request->all(), function($msj){
    			$msj->subject('Correo de contacto TROMAQSA');
    			$msj->to('musical.store.test@gmail.com');

    		});
    	Session::flash('message', 'Mensaje enviado correctamente');
    	return Redirect::to('/');
    }
}
