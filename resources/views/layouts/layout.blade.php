<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>

    <div class="pt-5" >
        <div class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #9d88c8">
            <div class="container">
                <a href="{{url('/calls')}}" class="navbar-brand">Fornecedora Leme</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-todo" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-todo">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/calls') }}">Home</a>
                        </li>
                        @can('admin')
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/users')}}">Usuários</a>
                        </li>
                        @endcan
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">                                
                                <img src="{{asset('perfil/' .Auth::user()->photo)}}" class="rounded-circle border border-2" width="32px">
                            </a>                            
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <a href="{{url('/users/show',['user'=>Auth::id()])}}" class="dropdown-item">Perfil</a>
                                <a href="{{url('/users/edit',['user'=>Auth::id()])}}" class="dropdown-item">Editar</a>
                                <form action="{{url('/logout')}}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Sair</button>                                    
                                </form>                                
                            </ul>                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        @yield('conteudo-principal')
    </div>

    <i class="fas fa-cloud-showers-heavy    "></i><script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>