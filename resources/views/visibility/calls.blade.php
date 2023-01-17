
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pedidos</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
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

			<div class="logout">
				<!-- formulario de logout -->
				<form action="{{url('logout')}}" method="post">
					@csrf
					<div class="butao">
						<button type="submit" >SAIR</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	


</body>
</html>
