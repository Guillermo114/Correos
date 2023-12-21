<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       <style>
        .formu{display: flex;
        justify-content: center;
    align-items: center;
    height: 60vh; }

    #mensaje{width: 600px;
    height: 200px;}
       </style>
             
    </head>
    <body>
        @include('_layout.plantilla')

            

                <div class="formu">
                    <form action="{{ url('/enviar') }}" method="GET">
                        @csrf <!-- Agrega el token CSRF -->
                        <label for="mensaje">Mensaje:</label><br>
                        <textarea id="mensaje" name="mensaje"></textarea><br><br><br>

                        <button type="submit" class="btn btn-primary">Enviar</button>
                        
                        
                    </form>

                        
                </div>
               
            </div>
            
           
       
            
    </body>
</html>
