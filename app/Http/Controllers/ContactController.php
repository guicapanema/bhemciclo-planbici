<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
	public function contact(Request $request) {

		$this->validate(request(), [
			'nome' => 'required|string|max:255',
			'email' => 'required|string|email|max:255',
			'mensagem' => 'required|string'
		]);

		$messageBody = "Mensagem de: " . request('nome') . " (" . request('email') . ")\r\n\r\n" . request('mensagem');
		Mail::raw($messageBody, function($message) {
			$message->from('bhemciclo@gmail.com', 'Formulário de contato planbicibh.org');
			$message->to(getenv('MAIL_CONTACT_TO'));
			$message->replyTo(request('email'), request('nome'));
			$message->subject('Nova mensagem no planbicibh.org');
		});
		$request->session()->flash('success', 'Mensagem enviada com sucesso!');
		return view('contato');
	}
}
