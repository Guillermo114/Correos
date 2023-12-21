<?php

namespace App\Jobs;


use App\Mail\Correo;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class EmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    
    protected $mensajeJob;

    public function __construct($mensajeJob)
    {
        //
        $this->mensajeJob=$mensajeJob;
        
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        Mail::to('memo1145222@gmail.com')->send(new Correo($this->mensajeJob));




    }
}
