<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms de imagens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

    <h1>Adicione uma foto na galeria</h1>
    <form action="{{route('acaiStore')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <label for="imagem">Arquivo:  </label>
          <input type="file" name="imagem" class="imagem" id="imagem" aria-describedby="emailHelp" accept="image/png, image/jpeg, image/jpg" required>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
</body>
</html>
