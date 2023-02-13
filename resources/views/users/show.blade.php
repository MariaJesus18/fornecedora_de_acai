@extends('layouts.layout')

@section('conteudo-principal')

<div class="container pt-5">
    <div class="row">
        <div class="col-8 offset-2">
            <h3 class="h3 border-bottom ">
                <i class="bi bi-list-task"></i>
                Perfil de Usuário                
            </h3 class="h3">
            
        </div>       
    </div>

    <div class="row align-items-center">
        <div class="col-md-6 offset-md-2">
            <p class="m-3 fs-4">
                Name: {{$user->name}}
            </p>
            <p class="m-3 fs-4">
               Email: {{$user->email}}               
            </p>                   
        </div>        
    </div>
    <div class="row align-items-center">
        <div class="col-md-6 offset-md-2">
            <img src="{{$photo}}" alt="sem imagem" width="200" height="200">
        </div>
    </div>
</div>

    
@endsection