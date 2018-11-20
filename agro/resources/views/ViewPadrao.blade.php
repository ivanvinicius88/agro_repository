<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>North Wind</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/agro"><div class="bg-danger py-2 h4">&nbsp;&nbsp;&nbsp;Agro&nbsp;&nbsp;&nbsp;</div></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="nav nav-bar">
                        <li class="nav-item dropdown">
                          <a class="nav-link" data-toggle="dropdown" href="#">Maquinarios</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="/todosMaquinario">Consultar</a>
                            <a class="dropdown-item" href="/addMaquinario">Cadastrar</a>
                          </div>
                        </li>
                    </ul>
                    <ul class="nav nav-bar">
                        <li class="nav-item dropdown">
                          <a class="nav-link" data-toggle="dropdown" href="#">Pessoas</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="/todosPessoa">Consultar</a>
                            <a class="dropdown-item" href="/addPessoa">Cadastrar</a>
                          </div>
                        </li>
                    </ul>
                    <ul class="nav nav-bar">
                        <li class="nav-item dropdown">
                          <a class="nav-link" data-toggle="dropdown" href="#">Lavouras</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="/todosLavoura">Consultar</a>
                            <a class="dropdown-item" href="/addLavoura">Cadastrar</a>
                          </div>
                        </li>
                    </ul>
                    <ul class="nav nav-bar">
                        <li class="nav-item dropdown">
                          <a class="nav-link" data-toggle="dropdown" href="#">Safras</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="/todosSafra">Consultar</a>
                            <a class="dropdown-item" href="/addSafra">Cadastrar</a>
                          </div>
                        </li>
                    </ul>
            </div>
        </nav>
        <br />
        <br />
        <br />
        <br />

   

      
        @yield('content')
        
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/jQuery.js"></script>
    @yield('javascript')

</body>
</html>
