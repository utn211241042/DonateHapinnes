<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>donate/happiness</title>
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
    <br>
    <h1 class="heading-1">Bienvenido Organización</h1>

    <br>
    <br>
    <center>
    <div >
     
        <table class="">
            <style>
                .add-button {
                    display: inline-flex;
                    align-items: center;
                    padding: 10px;
                    background-color: #e8e8e8;
                    color: white;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                }
        
                .add-button i {
                    margin-right: 5px;
                }
            </style>
            <thead>
                <button class="add-button">
                    <i class="fas fa-plus"><a href="{{route('registrarProyecto')}}">Agregar proyecto</a></i> 
                </button>
                <tr>
                    <th>N°</th>
                    <th>Nombre Proyecto</th>
                    <th>Eliminar</th>
                    <th>Editar</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project) 
                <tr>
                    <td>{{$project['id']}}</td>
                    <td>{{$project['nombre']}}</td>
                    <td><div class="btnn-read-more"><i class="bi bi-trash" aria-hidden="true"></i><a href="{{route('deleteProject', ['id' => $project['id']])}}"> Eliminar</a></div></td>
                    <td><div class="btnn-read-more"><i class="bi bi-pencil-square" aria-hidden="true"></i><a href="{{route('editProject', ['id' => $project['id']])}}"> Editar</a></div></td>
                   
                    
                </tr>
                @endforeach
             
            </tbody>
        </table>
        
    </div>
</center>
    <br>
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

                <img src="img/payment.png" alt="Pagos">
            </div>
        </div>
    </footer>
</body>
</html>