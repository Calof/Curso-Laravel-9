@extends('users/layouts.app')

@section('content')
@section('title','listagen dos usuarios')
<h1>Listagem dos usuarios
    <a href="{{route('users.create')}}">+</a>
</h1>
<form action="{{route('users.index')}}" method="get">
<input type="text" name="search" placeholder="Pesquisar">
    <button>Pesquisar</button>
<ul>
    
    @foreach ($users as $user)
    <li>
        {{ $user->name }} -
        {{ $user->email }}
        <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
        <a href="{{ route('user.edit', $user->id) }}">Editar</a>
    </li>
    @endforeach
</ul>
@endsection