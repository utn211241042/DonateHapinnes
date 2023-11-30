<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="styles2.css">
    <title>donate/happiness</title>
		<link rel="stylesheet" href="styles.css" />
        <link rel="icon" href="img/logoProyecto.png">
        <link rel="stylesheet" href="style3.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    @include('layouts.header_admin')
    <br>
    <br>
    <h1 class="heading-1">Bandeja de preguntas</h1>

    <br>
    <br>
    <center>
    <div >

        <table >
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nombre Organización</th>
                    <th>Pregunta</th>
                    <th>Respuesta</th>
                    <th>Enviar</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01</td>
                    <td>San pedros</td>
                    <td>¿No puedo agregar proyecto porque?</td>
                    <td> <textarea class="input100" type="text" name="username"  required></textarea></td>
                    <td><div class="btnn-read-more"><i class="fa fa-envelope" aria-hidden="true"></i></div></td>
                  
              
                </tr>
                <tr>
                    <td>02</td>
                    <td>Patitas al</td>
                    <td>¿No puedo agregar proyecto porque?</td>
                    <td> <textarea class="input100" type="text" name="username"  required></textarea></td>
                    <td><div class="btnn-read-more"><i class="fa fa-envelope" aria-hidden="true"></i></div></td>
                   
                </tr>
                <tr>
                    <td>03</td>
                    <td>Carlos</td>
                    <td>Carlos</td>
                    <td> <textarea class="input100" type="text" name="username"  required></textarea></td>
                    <td><div class="btnn-read-more"><i class="fa fa-envelope" aria-hidden="true"></i></div></td>
                    
                </tr>
             
            </tbody>
        </table>
    </div>
</center>
    <br>
    <br>
    <br>
    @include('layouts.footer')
</body>
</html>