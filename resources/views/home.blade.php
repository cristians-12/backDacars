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
    @if ($product == 'hentai')
    <img width="300" src="https://pbs.twimg.com/media/GB18Ehha0AA5JZk?format=jpg&name=large" alt="">
    @endif
</body>

</html>