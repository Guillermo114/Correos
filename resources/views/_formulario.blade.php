<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #dd1b1b;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content, a {
                text-align: center;
                font-size: 30px;
                
                text-decoration: none;
            }

            .title {
                font-size: 84px;
            }

            .formu, a{
                color: #0c19d4;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
              
               
            }

            .m-b-md {
                margin-bottom: 40px;
                
            }

            #mensaje {
    width: 600px; /* Ancho del cuadro de texto */
    height: 150px; /* Altura del cuadro de texto */
    font-size: 16px; /* Tamaño de la fuente dentro del cuadro de texto */
  }
       
        </style>
    </head>
    <body>
        
        <div class="flex-center position-ref full-height">
           
            

            <div class="content m-b-md">
                <a href="{{URL ('/')}}">Inicio</a>
                <div class="title m-b-md">
                    Escribe tu mensaje
                </div>

                <div class="formu">
                    <form action="{{ url('/enviar') }}" method="GET">
                        @csrf <!-- Agrega el token CSRF -->
                        <label for="mensaje">Mensaje:</label><br>
                        <textarea id="mensaje" name="mensaje"></textarea><br><br><br>
                        <input type="submit" value="Enviar">
                    </form>
                    
                    
                      

                   
                    
                  
                        
                </div>
               
            </div>
            
        </div>
       
    </body>
</html>
