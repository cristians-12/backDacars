<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>

<body>
    <h1>Hola</h1>
    <h2>
        El producto es {{$product }}
    </h2>
    @if ($product == 'ropa')
    <img width="300" src="https://i.pinimg.com/236x/ab/50/4a/ab504a993206ae2151782a692c5c2a05.jpg" alt="">
    @endif
</body>

</html>