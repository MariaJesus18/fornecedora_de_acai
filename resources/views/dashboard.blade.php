<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>



    <div class="opcoes">

        <img src="LEME.png" class="img1">
        <div class="listagem">

            <!-- listagem de pedidos do úsuario -->
            <h1>Todos os pedidos:</h1>
            <ul class="">

                @foreach ($tasks as $item)
                @foreach ($users as $itens)

                <div class="lis_ped">
                    <li class="">

                        <p class="">
                        {{$itens->name}}

                            - {{$item->size}} kg de açaí 

                            {{$item->flavor}}

                            e-mail: {{$itens->email}}
                        </p>

                        @if ($item->status)
                        <h3 class="">
                            <i class=""></i>
                            Entregue
                        </h3>
                        @else
                        <div>
                            <a href="{{route('update_call', ['id' => $item->id])}}"><button>Entregar</button></a>
                        </div>
                        <span class="">
                            ~ O pedido está a caminho
                        </span>
                        @endif

                    </li>
                    @endforeach
                    @endforeach

                </div>
            </ul>
        </div>

    </div>
</body>
</html>