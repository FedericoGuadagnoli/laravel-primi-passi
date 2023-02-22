<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Laravel Primi Passi</title>
</head>

<body>
    <header>
        <audio src="{{ asset('the-final-battle.mp3') }}" autoplay loop></audio>
        <h1>Hello Gamers</h1>
    </header>
    <main>
        <h1>{{$eldenRing[1]}}</h1>
        <img src="{{$eldenRing[0]}}" alt="Elden Ring">
    </main>
</body>

</html>