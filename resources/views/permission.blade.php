<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <body>
        @can('admin')
            <h1>Você é admin</h1>
        @endcan
        @can('default')
            <h1>Você e usuário Default</h1>
        @endcan
        @can('visitor')
            <h1>Você é Visitante</h1>
        @endcan
    </body>
</body>

</html>
