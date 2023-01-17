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
    <form action="{{url('/register')}}" method="POST">
        @csrf
        <div class="inputs" >
            <label for="nome" class="label">Nome</label>
            <input type="nome" placeholder="Digite seu nome" id="name" name="name">

            <label for="email" class="label">Email</label>
            <input type="email" placeholder="Digite seu email" id="email" name="email">

            <label for="password">Senha</label>
            <input type="password"placeholder="Digite seu email" id="password" name="password">

            <label for="password">Confirme a senha</label>
            <input type="password"  placeholder="Digite seu email"name="password_confirmation">

        </div>                   
      
        <div class="butao">
                <button type="submit" >Registrar</button>
        </div>
    </form>
</div>
</body>
</html>