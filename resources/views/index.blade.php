@extends('layouts.template')

<!DOCTYPE html>
<html lang="pt-br">
<head>
	  <link rel="stylesheet" type="text/css" href="styles/style.css">
	<title>Açaiteria LEME</title>

	@section('content')
	
</head>
<body>

		<div class="bt">
			<a href="{{url('/login')}}" class=""><button class="butao">Entrar</button></a>
			<a href="{{url('/register')}}" class=""><button class="butao">Registra-se</button></a>
		</div>
	</body>
	</html>

	@endsection