<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <head>
        <title>TOWNOUT</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
        <script type="text/javascript" src="{{asset('assets/lib/jquery-3.4.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/lib/popper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/lib/bootstrap.min.js')}}"></script>
    </head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark  static-top bg-darkblue">
            <div class="container">
                <a class="navbar-brand" href="#">

                    <img id="logo" src="{{asset('assets/img/townOutWhite2.png')}}" width="20%" height="20%" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Inicio
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Juega</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Crea</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="row">
            <section class="col-lg-6">
                <h1 id="tituloPrincipal" class="display-4 py-5 my-5">Una nueva forma de descubrir el mundo</h1>
                <p class="text-light px-4 lead font-weight-bold" id="textoPrinciapal">Con TownOut el turismo pasa a un nuevo nivel. Explora los rincones más emblemáticos de todo el mundo mientras superas acertijos</p>
            </section>
            <aside class="col-lg-6">
                <img id="movil" src="{{asset('assets/img/Mobile-PNG3.png')}}">
                
            </aside>

        </div>
    </div>


    <div class="card-deck p-4 vh-100">
        <h1 id="tituloCard" class="display-4">La forma más facil de conocer nuevos lugares</h1>
        <div class="card col-sm-12">
        
            <img src="{{asset('assets/img/brujula3.png')}}" class="card-img-top cardImg align-self-start mt-2 pl-4" alt="...">
            <div class="card-body">
                <h5 class="card-title font-weight-bold text-uppercase">Inicia TownOut</h5>
                <p class="card-text">Accede a la página web desde cualquier dispositivo con conexión a internet</p>
            </div>
        </div>
        <div class="card">
        
            <img src="{{asset('assets/img/interrogacion.svg')}}" class="card-img-top cardImg align-self-start mt-2 pl-4" alt="...">
            <div class="card-body">
                <h5 class="card-title font-weight-bold text-uppercase">Escoge una experiencia</h5>
                <p class="card-text">Escoge la experiencia que quieras vivir.</p>
            </div>
        </div>
        <div class="card">
            <img src="{{asset('assets/img/pointer.png')}}" class="card-img-top cardImg align-self-start mt-2 pl-4" alt="...">
            <div class="card-body">
                <h5 class="card-title font-weight-bold text-uppercase">Empieza a explorar</h5>
                <p class="card-text">Sigue las pistas, resuelve los acertijos y des </p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col-md-6 col-sm-12" id="usuario">
                <h2 class="display-4 tituloJugador pl-2 pt-2">Quiero participar en una experiencia</h2>
                <div class="row">
                
                    <img class="col-6 pt-2" src="{{asset('assets/img/hiking.svg')}}">
                    <div class="col-6 pt-4">
                        <p class="text-light font-weight-bold">
                            Participa en los mejores circuitos diseñados por guias turísticos expertos en la zona.
                        </p>
                        <p class="text-light font-weight-bold">
                            Resuelve enigmas y acertijos junto con tu y sed los primeros
                        </p>
                        <p class="text-light font-weight-bold">
                            Descubre la ciudad como nunca antes
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12" id="guia">
                <h2 class="display-4 tituloGuia pl-2 pt-2">Quiero crear nuevas experiencias</h2>

                <div class="row">
                
                    <img class="col-6" src="{{asset('assets/img/graphic-designer2.svg')}}">

                    <div class="col-6 pt-4">
                        <p class="text-light font-weight-bold">
                            Utiliza la herramienta de creación de esxperiencias para crear circuitos a medida con recorridos y pruebas a tu gusto
                        </p>
                        <p class="text-light font-weight-bold">
                            Resuelve enigmas y acertijos junto con tu y sed los primeros
                        </p>
                        <p class="text-light font-weight-bold">
                            Descubre la ciudad como nunca antes
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid formulario">
        <h1 class="display-4 mx-auto text-center" id="tituloPrincipal">Comienza ahora mismo, ¡¡contactanos!!</h1>
        <form class="col-lg-6 mx-auto">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ej: Carlos">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Apellido:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ej: Navarro">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Correo electrónico:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Inserta una dirección de correo electrónico">
                <small id="emailHelp" class="form-text text-muted">Townout vela por tu privacidad, tu correo no será compartido</small>
            </div>
            <div class="form-group form-check">
                <label class="form-check-label" for="exampleCheck1">Mensaje:</label>
                <textarea></textarea>

            </div>
            <button type="submit" class="btn btn-primary center">Enviar</button>
        </form>

    </div>

    <footer class="bg-darkblue">

        <img src="{{asset('assets/img/facebook.png')}}">
        <img src="{{asset('assets/img/twitter.png')}}">
        <img src="{{asset('assets/img/insta.png')}}">


    </footer>
</body>

</html>