<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/diseño ittg.css')}}">

    <title>Entrada</title>
</head>
<body>
    @if (session('error'))
    <div>
        {{ session('error') }}
    </div>
    <br>
    @endif
    </header>
    <div align="center">
        <img class="ittg grow" src="img/logotec_300.png" border="50%"><br>
    </div>

    <div align="center">
    <form action="/validar" method="post">
        @csrf
        Usuario:   <input type="text" name="usuario"style="width: 250px; height: 10px;"><br>
        Contraseña:<input type="password" name="password"style="width: 250px; height: 10px;"><br>
        <input type="submit" value="Enviar"style="width:100px; height: 50px;">
    </form>
</div>
</body>
</html>