<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Messages;


class ContattiController extends Controller
{

     public function index()
     {
         return view('contact-form');
     }
     public function store(Request $request)
     {
        $this->validate($request, [
            'nome' => 'required|min:4',
            'email' => 'required',
            'oggetto' => 'required|min:4|max:100',
            'messaggio' => 'required|min:15|max:1000',
        ]);

         $messaggio = new Messages;
         $messaggio->nome = $request->nome;
         $messaggio->email = $request->email;
         $messaggio->oggetto = $request->oggetto;
         $messaggio->messaggio = $request->messaggio;
         $messaggio->save();
         return redirect('/')
         ->with('status', 'il tuo messaggio è stato inviato correttamente')
         ->with('nome', strtolower($request->nome));
     }
}
