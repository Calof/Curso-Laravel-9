@extends('users/layouts.app')

@section('content')
@section('title','listagen dos usuarios')
<h1>Listagem dos usuarios
    <a href="{{route('users.create')}}">+</a>
</h1>

<ul>
    @foreach ($users as $user)
    <li>
        {{ $user->name }} -
        {{ $user->email }}
        <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
    </li>
    @endforeach
</ul>
@endsection