<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


        <title>Laravel</title>

    
        
    </head>
    <body>
        

        
       

        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
           
        
          
           
            
            <div class="container-fluid"> 
                @section('menu')
              <a class="navbar-brand" href="{{URL ('/')}}">Inicio</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{URL('form')}}">Enviar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">¿Cómo funciona?</a>
                  </li>
                 
                </ul>
                
              </div>
            </div>
            
          </nav>
          
         
        </div>




          
       
    </body>
</html>
