<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMessageRequest;
//use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('dashboard');
    }

    public function contact()
    {
        return view('contactos');
    }

    public function saludos($nombre = 'Invitado')
    {
        return view('saludo', compact('nombre'));
    }

    public function mensaje(CreateMessageRequest $request)
    {
        $data = $request->all();

        return back()->with('info', 'Mensaje enviado correctamente');
    }
}
