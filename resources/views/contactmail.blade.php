<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto Prestige</title>
</head>

<body>
    <ul>
        <li>
            <strong>Correo: </strong> {{ $request->email }}
        </li>
        <li>
            <strong>Nombre : </strong> {{ $request->firstName.' '.$request->lastName }}
        </li>
      
        <li>
            <strong>Mensaje: </strong>{{ $request->message }}
        </li>
    </ul>
   
</body>

</html>
