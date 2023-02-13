@extends('layouts.layout')

@section('conteudo-principal')

<div class="container pt-5">

    <div class="row">
        <div class="col-8 offset-2">
            <h3 class="h3 border-bottom">
                <i class="bi bi-list-task"></i>
                Usuários
            </h3 class="h3">
        </div>           
    </div>

    <div class="row">
        <div class="col-6 offset-3">
            <ul class="list-group list-group-flush mt-4">
                @foreach ($users as $user)
                <li class="list-group-item d-flex flex-wrap align-items-center">                            
                    <p class="flex-grow-1">
                        <a href="{{url('users/show', ['user'=>$user->id])}}" class="flex-grow-1">
                           {{$user->name}}
                        </a>
                    </p>
                    @if ($user->admin)
                    <span class="badge bg-success">Admin</span>    
                    @else
                    <span>
                        <a class="btn btn-link" href="{{url('users/admin', ['user'=>$user->id])}}">
                            Promover
                        </a>
                    </span>
                    @endif                    
                </li>
                @endforeach
            </ul>
        </div>
    </div>


</div>
    
@endsection