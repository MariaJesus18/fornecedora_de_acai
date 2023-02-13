
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pedidos</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>
<body>

	<div class="pt-5">          
        {{-- nav bar --}}
        <div class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #9d88c8">
            <div class="container">
                <a href="" class="navbar-brand" style="color: yellow">Fornecedora de açaí</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-todo" aria-controls="navbarNav" 
				aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-todo">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/dashboard') }}" style="color: yellow">Painel de controle</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/calls')}} " style="color: yellow">Pedidos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">                                
                                <img src="{{asset('perfil/' .Auth::user()->photo)}}" class="rounded-circle border border-2" width="32px">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <form action="{{url('/logout')}}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Sair</button>
                                    {{-- <a href="" class="dropdown-item">Sair</a> --}}
                                </form>   
								<a href="{{route('showPerfil', Auth::id())}}" class="dropdown-item">Perfil</a>
                            </ul>                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


	<div class="conteudoCalls">

		<div class="opcoes">

			<img src="LEME.png" class="img1">
			


			<div class="sabores">
				<h1>Sabores:</h1>

				<h2>- Tradicional</h2>
				<h2>- Zero</h2>
				<h2>- Banana</h2>
				<h2>- Chocolate</h2>
				<h2>- Morango</h2>
				<h2>- Chocolate Branco</h2>

				<h1>Preço:</h1>

				<h2> R$ 25,00 KG</h2>


			</div>

			<form action="{{url('/calls')}}" method="POST">
				@csrf


				<div class="fieldset">

					<div class="inputs">
						<h1>Digite a quantidade e sabor desejada:</h1>
						<input type = "text" name = "size"  placeholder="Quilograma">
						<input type = "text" name = "flavor"  placeholder="Sabor">

					</div>
				</div>
				<div class="formCalls">
					<div  class="inputs">

						<h1>Endereço: </h1>
						<input class="inputs2" type="text" name="endereco" placeholder="Cidade/Bairro/Rua/Número">

					</div>
					<div class="butao">
						<button type="submit" >Enviar</button>
					</div>
				</div>
				


			</form>	

			<div class="listagem">

				<!-- listagem de pedidos do úsuario -->
				<h1>Seus pedidos:</h1>
				<ul class="">
					@foreach ($tasks as $item)

					<div class="lis_ped">
						<li class="">
							<p class="">
								
								- {{$item->size}} kg de açaí 
								{{$item->flavor}}
							</p>
							@if ($item->status)
							<span class="">
								<i class=""></i>
								entregue
							</span>
							@else
							<span class="">
								~ à caminho
							</span>
							@endif
						</li>
						@endforeach

					</div>
				</ul>
			</div>
		</div>
	</div>

	
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>



</body>
</html>
