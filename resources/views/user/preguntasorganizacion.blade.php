<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<title>donate/happiness</title>
		<link rel="stylesheet" href="styles.css" />
		
		<link rel="stylesheet" href="conocenos.css">
		<link rel="icon" href="img/logoProyecto.png">
		<link rel="stylesheet" href="style3.css">
		<link rel="stylesheet" href="{{asset('css/styles.css')}}"/>
    	<link rel="stylesheet" href="{{asset('css/styles2.css')}}"/>
    	<link rel="stylesheet" href="{{asset('css/styles3.css')}}"/>
		<link rel="stylesheet" href="{{asset('css/proyectcss.css')}}"/>
		<link rel="icon" href="{{asset('img/logoProyecto.png')}}">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        @include('layouts.header_org')
	</head>
	<body>
		

    <br>


<div class="container-card">
	
<div class="card">
	
	<center>
	
		
        <form action="procesar.php" method="post">
			<div class="title-cards">
				<h2>Enviar Preguntas</h2>
			</div>
			<label for="correo">Correo electrónico:</label>
			<br>
            <input type="email" name="correo" id="correo">
            <br>
            <label for="nombre">Nombre:</label>
			<br>
            <input type="text" name="nombre" id="nombre">
            <br>
          
            <label for="mensaje">Mensaje:</label>
			<br>
            <textarea name="mensaje" id="mensaje" rows="10" cols="30"></textarea>
            <br>
			<button>Enviar</button>
			<br>
			<br>
        </form>
	</center> 
</div>


</div>

    <br>

			
		</main>
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
