<?php

namespace App\Http\Controllers;


use App\Mail\Correo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnviarController extends Controller
{
    //
    public function enviar(Request $request)
    {
        $mensaje = $request->input('mensaje');
        Mail::to('memo1145222@gmail.com')->send(new Correo($mensaje));
        // Resto del código...
        return view('plantillasCorreo.correo_enviado');
    }
    
}
