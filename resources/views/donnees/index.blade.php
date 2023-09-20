<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donnees</title>
</head>
<body>
    <h1>Contenu page Index </h1>
    {{$name}}
    {{$age}}

    @foreach( $names as $name )
    
    {{ $name }}

<br/>
    @endforeach


</body>
</html>