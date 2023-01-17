<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <title>Açaiteria LEME</title>

</head>
<body>
    <img src="LEME.png" class="img1">
    <div class="form">
        <form action="{{url('/login')}}" method="POST">
            @csrf
            <div class="inputs">
                <label for="email" class="label">Email
                <input type="email"  placeholder="Digite seu email" id="email" name="email"></label>

                <label for="password" class="label">Senha</label>
                <input type="password" placeholder="Digite seu email" id="password" name="password">

            </div>
            <div class="butao">
                <button type="submit" >Entrar</button>
            </div>

        </form>
    </div>

</body>
</html>