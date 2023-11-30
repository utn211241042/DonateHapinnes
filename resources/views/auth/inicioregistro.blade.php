<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/styles2.css')}}">
    <title>donate/happiness</title>
		<link rel="stylesheet" href="{{asset('css/styles.css')}}" />
        <link rel="icon" href="{{asset('img/logoProyecto.png')}}">
</head>
@include('layouts.header')

<body>
    
	<br>
    <br>
    <br>

    <center><div class="containerr" id="containerr">
        <div class="form-containerr sign-up">
            <form action="{{route('registrar')}}" method="POST">
                @csrf
                <h1>Registrar</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa fa-check-square-o"></i></a>
                    
                </div>
                <span></span>
         
                <input type="text" placeholder="Nombre de la organización"
                name="name"
                value="{{old('name')}}">
                @error('name'){{$message}} @enderror
              
                <input type="number" placeholder="Teléfono"
                name="telefono" 
                value="{{old('telefono')}}" >
                <input type="email" placeholder="Correo electronico"
                name="email"
                value="{{old('email')}}">
                @error('email')
                {{$message}}
                @enderror
                <input type="password" placeholder="Contraseña"
                name="password" >
                @error('password')
                {{$message}}
                @enderror
                <input type="password" placeholder="Confirma contraseña"
                name="password_confirmation">

                <button>Registrar</button>
            </form>
        </div>
        <div class="form-containerr sign-in">
            <form action="{{route('login')}}" method="POST">
                @csrf
                <h1>Iniciar Sesión</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa fa-id-card-o"></i></a>
                   
                </div>
                <span></span>
                <input type="email" placeholder="Correo electronico"
                name="email">
                <input type="password" placeholder="Contraseña"
                name="password" >
                <a href="#">Olvidaste contraseña?</a>
                <button>Iniciar sesión</button>
            </form>
        </div>
        <div class="toggle-containerr">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bienvenidos!</h1>
                    <p>Ingrese sus datos personales para utilizar todas las funciones del sitio</p>
                    <button class="hidden" id="login">Iniciar sesión</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hola,que tal!</h1>
                    <p>Regístrese con sus datos personales para utilizar todas las funciones del sitio</p>
                    <button class="hidden" id="register">Registrar</button>
                </div>
            </div>
        </div>
    </div>
    </center>
<br>
<br>
<footer class="footer">
    <div class="container container-footer">
        <div class="menu-footer">
            <div class="contact-info">
                <p class="title-footer">Información de Contacto</p>
                <ul>
                    <li>
                        Dirección: 71 Pennington Lane Vernon Rockville, CT
                        06066
                    </li>
                    <li>Teléfono: 123-456-7890</li>
                    <li>Fax: 55555300</li>
                    <li>EmaiL:happiness@funda.com</li>
                </ul>
                <div class="social-icons">
                    <span class="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </span>
                    <span class="twitter">
                        <i class="fa-brands fa-twitter"></i>
                    </span>
                    <span class="youtube">
                        <i class="fa-brands fa-youtube"></i>
                    </span>
                    <span class="pinterest">
                        <i class="fa-brands fa-pinterest-p"></i>
                    </span>
                    <span class="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </span>
                </div>
            </div>

            <div class="information">
                <p class="title-footer">Información</p>
                <ul>
                    <li><a href="#">Politicas de Privacidad</a></li>
                    <li><a href="#">Términos y condiciones</a></li>
                    <li><a href="#">Contactános</a></li>
                </ul>
            </div>

            <div class="my-account">
                <p class="title-footer">Mi cuenta</p>

                <ul>
                    <li><a href="#">Mi cuenta</a></li>
                </ul>
            </div>

            <div class="newsletter">
                <p class="title-footer">Boletín informativo</p>

                <div class="content">
                    <p>
                        Suscríbete y registrata tu organización para llegar a mas personas.
                         
                    </p>
                    <input type="email" placeholder="Ingresa el correo aquí...">
                    <button>Suscríbete</button>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p>
                DONATE/HAPPINESS &copy; 2023
            </p>

            <img src="{{asset('img/payment.png')}}" alt="Pagos">
        </div>
    </div>
</footer>

    <script src="{{asset('js/script.js')}}"></script>
    <script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
</body>

</html>