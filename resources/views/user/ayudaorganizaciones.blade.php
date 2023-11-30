<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
        <title>donate/happiness</title>
		<link rel="stylesheet" href="{{asset('css/styles.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/styles2.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/styles3.css')}}"/>
		<link rel="stylesheet" href="{{asset('css/proyectcss.css')}}"/>
		<link rel="icon" href="{{asset('img/logoProyecto.png')}}">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        @include('layouts.header_org')
	</head>
	<body >
		
    
    <div class="contenedor-acordeon" >
        <h2>Preguntas frecuentes</h2>
        <div class="acordeon">
            <input type="radio" name="acordeon" id="btn-acordeon1" class="btn-acordeon">
            <label for="btn-acordeon1">
                ¿Como un registar proyecto?

            </label>
            <div class="contenido-acordeon">
        <p>Facíl, ingresamos al inicio y en la tabla donde se encuentran todos nuestros proyectos le damos clicl al botón que se encuentra justo arriba "Agregar proyecto",nos mandara al formulario que debe llenar con los datos correspondientes al proyecto que desea registrar.Por ultimo le da registrar.</p>
            </div>
        </div>
        <div class="acordeon">
         <input type="radio" name="acordeon" id="btn-acordeon2" class="btn-acordeon">
         <label for="btn-acordeon2">
            ¿Para que sirve el dashboard?

         </label>
         <div class="contenido-acordeon">
             <p>Nos sirve para analizar los datos de donaciones.</p>
         </div>
     </div>
     <div class="acordeon">
         <input type="radio" name="acordeon" id="btn-acordeon3" class="btn-acordeon">
         <label for="btn-acordeon3">
            ¿Qué pasa si no resives el donanitivo ?

         </label>
         <div class="contenido-acordeon">
             <p>Comuicarte al correo "happiness@gmail.com" </p>
         </div>
     </div>
     <div class="acordeon">
         <input type="radio" name="acordeon" id="btn-acordeon4" class="btn-acordeon">
         <label for="btn-acordeon4">
            ¿Cuando resivo las donaciones?

         </label>
         <div class="contenido-acordeon">
             <p>Cada sabado ,resives las donación correspondiente al proyecto .</p>
         </div>
     </div>
    </div>
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
                        <li>EmaiL:happiness@gmailcom</li>
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

                <img src="img/payment.png" alt="Pagos">
            </div>
        </div>
    </footer>

		<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
		<script src="script.js"></script>
	</body>
</html>
