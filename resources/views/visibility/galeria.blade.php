<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeria da empresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>
<body>     
        <main role="main">
    
          <section class="jumbotron text-center">
            <div class="container">
              <h1 class="jumbotron-heading">Galeria de fotos da empresa</h1>
              <p class="lead text-muted">Saiba que a fornecedora LEME de açaí tem um caminho enorme por seus clientes</p>
              <p>
                <a href="{{route('galeriaCreate')}}" class="btn btn-primary my-2">Colocar uma foto no álbum</a>
                <a href="{{route('pedidos')}}" class="btn btn-secondary my-2">Ir para página de pedidos</a>
              </p>
            </div>
          </section>
    
          
        
          <div class="album py-5 bg-light">
            <div class="container">
                

              <div class="row">
@foreach($galeria as $foto)

          @php
            $path = '/Galeria/' . $foto->imagem;
            $full_path = \Illuminate\Support\Facades\Storage::path($path);
            $base64 = base64_encode(Storage::get($path));
            $image_data = 'data:'.mime_content_type($full_path) . ';base64,' . $base64;  
        @endphp

                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">


                    <center><img src="{{$image_data}}" alt="tem imagem" width="150" height="150"></center>
                    
              
                    <div class="card-body">
                      <p class="card-text">Texto aleatório</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="{{$image_data}}" download="F_A_LEME"><button type="button" class="btn btn-sm btn-outline-secondary">Realizar download</button></a>
                        </div>
                        <small class="text-muted">L.E.M.E</small>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                    </div>
                  </div>
                </div>
                
        </main>
    
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <script src="../../assets/js/vendor/holder.min.js"></script>
    <svg xmlns="http://www.w3.org/2000/svg" width="288" height="225" viewBox="0 0 288 225" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="14" style="font-weight:bold;font-size:14pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text></svg>

</body>
</html>