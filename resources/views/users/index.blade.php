@extends('users/layouts.app')

@section('content')
@section('title','listagen dos usuarios')
<h1 class="text-2x1 font-semibold leading-tigh py-2" >Listagem dos usuarios
    <a href="{{route('users.create')}}" class="bg-blue-900 rounded-full text-white px-4 text-sm">+</a>
</h1>
<form action="{{route('users.index')}}" method="get" class="py-5">
<input type="text" name="search" placeholder="Pesquisar" class="md:w-1/6 bg-gray-200 appearance-none box-content h-100 w-100 p-2 rounded-lg  ">
    <button class="shadow bg-purple-300 hover:bg-purple-200 focus:shadow-outline rounded-lg box-content h-100 w-100 p-2" >Pesquisar</button>
<ul>
    
    
    <table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
      <thead>
        <tr>
            <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left"
            > 
            Nome
            </th>
            <th 
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left"
            >
            E-mail
            </th>
            <th 
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left"
            >
            Editar
            </th>
            <th 
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left"
            >
            Detalhes
            </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
            <td class="px-5 py-5 border-b border-gray-100">{{ $user->name }}</td>
            <td class="px-5 py-5 border-b border-gray-100">{{ $user->email }}</td>
            <td class="px-5 py-5 border-b border-gray-100">
                <a href="{{ route('users.show', $user->id) }}" class="shadow bg-blue-300 hover:bg-blue-200 focus:shadow-outline rounded-lg box-content h-100 w-100 p-2">Detalhes</a>
            </td>
            <td class="px-5 py-5 border-b border-gray-100">
                <a href="{{ route('user.edit', $user->id) }}" class="shadow bg-green-300 hover:bg-green-200 focus:shadow-outline rounded-lg box-content h-100 w-100 p-2" >Editar</a>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
@endsection