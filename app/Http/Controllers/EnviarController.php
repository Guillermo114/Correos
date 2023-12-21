<?php

namespace App\Http\Controllers;

use App\Jobs\EmailJob;
use Illuminate\Http\Request;


class EnviarController extends Controller
{
    //
    public function enviar(Request $request)
    {
        $mensaje = $request->input('mensaje');
     

        EmailJob::dispatch($mensaje)->onQueue('enviarQueue');

        return view('plantillasCorreo.correo_enviado');

    }
    
}

   