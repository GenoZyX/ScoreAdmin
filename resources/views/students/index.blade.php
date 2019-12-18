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
        <div>
        <?php 
            $action=isset($_REQUEST['action']) ? $_REQUEST['action'] : 'index';
            $response=isset($_REQUEST['response']) ? $_REQUEST['response'] : 'index';
        ?> 
        <?php if($action=="create" && $response=="success"){?> <!--ALERTA CREATE-->
            <div class="alert alert-success" role="alert">
                <strong>Acción Exitosa!</strong> Se ha creado un nuevo registro correctamente.
            </div>
        <?php };?>
        
        <?php if($action=="delete" && $response=="success"){?><!--ALERTA DELETE-->
            <div class="alert alert-danger" role="alert">
                <strong>Acción Exitosa!</strong> Se ha eliminado un registro correctamente.
            </div>
        <?php };?> 
       
        <?php if($action=="update" && $response=="success"){?> <!--ALERTA UPDATE-->
            <div class="alert alert-warning" role="alert">
                <strong>Acción Exitosa!</strong> Se ha actualizado un registro correctamente.
            </div>
        <?php };?>   
        </div>
        <div align="center">
            <h1 style="font-weight:bold;">Tabla de Estudiantes</h1>
            <hr>
        </div>
        <div>
            <table class="table table-striped table-bordered ">
                <thead class="thead-dark">
                <tr style="text-align:center;">
                    <th>ID</th>
                    <th>NOMBRES</th>
                    <th>APELLIDOS</th>
                    <th>NÚMERO TELEFÓNICO</th>
                    <th>DIRECCIÓN</th>
                    <th>CORREO INSTITUCIONAL</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
            @foreach($students as $student)
                <tr style="text-align:center;">
                    <td>{{$student->id}}</td>
                    <td>{{$student->student_names}}</td>
                    <td>{{$student->student_lastnames}}</td>
                    <td>{{$student->phone_number}}</td>
                    <td>{{$student->address}}</td>
                    <td>{{$student->institutional_email}}</td>
                    <td><a href="" class="btn btn-block btn-info" style="width:100px">VER MÁS</a></td>
                    <td><a href="{{route ('students.)}}" class="btn btn-block btn-warning">ACTUALIZAR</a></td>
                    <td>
                        <form action="{{route ('students.destroy',[$student->id])}}" method="post"> 
                            @csrf 
                            @method('DELETE')
                            <button class="btn btn-block btn-danger" type="submit">ELIMINAR</button> 
                        </form>
                        
                    </td>
                </tr>
            @endforeach
            </table>
        </div>

        {{$students->render()}}
        <div align="center">
            <a href="" class="btn btn-block btn-success" style="width:45%; margin-top:50px;">CREAR UN NUEVO REGISTRO</a>
        </div>
    </div>
</body>
</html>