<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saludo</title>
    <link rel="stylesheet" href="{!! asset('/resources/css/saludo.css')!!}">
</head>

<body>
    <div id="saludo">Hola {{ $name }} desde {{ env('APP_NAME') }}
    </div>
</body>

</html>
