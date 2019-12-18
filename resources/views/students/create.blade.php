<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <title>CRUD ESTUDIANTES</title>
</head>
<body style="font-family:Roboto;">
    <div style="margin:50px;">
        <div align="center">
            <h1 style="font-weight:bold;">Formulario de Estudiantes</h1>
            <hr>
        </div>
        <div>
            <form action="">
            
            </form>
        </div>

        {{$students->render()}}
        <div align="center">
            <a href="" class="btn btn-block btn-success" style="width:45%; margin-top:50px;">CREAR UN NUEVO REGISTRO</a>
        </div>
    </div>
</body>
</html>