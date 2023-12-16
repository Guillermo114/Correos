<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;





class Correo extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     //atributos del correo
    public $mensaje;
     
    public function __construct($mensaje)
    {
        //
        $this->mensaje=$mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('plantillasCorreo.correo_plantilla')
        ->from('pruebadecorreo@new.com')
        ->subject('Mensaje de prueba')->with([
            'mensaje' => $this->mensaje, // Pasar el mensaje a la vista
        ]);
    }
}
