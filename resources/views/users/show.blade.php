@extends('users/layouts.app')

@section('title','listagen do usuario')
    

@section('content')
<h1 class="text-2x1 font-semibold leading-tigh py-2">Listagem do usuario {{$user->name}} </h1>

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
      </tr>
    </thead>
    <tbody>
      <tr>
          <td class="px-5 py-5 border-b border-gray-100">{{ $user->name }}</td>
          <td class="px-5 py-5 border-b border-gray-100">{{ $user->email }}</td>
          
      </tr>
     
    </tbody>
  </table>

<form action="{{ route('users.destroy', $user->id)}}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit" class="shadow bg-red-300 hover:bg-red-200 focus:shadow-outline rounded-lg box-content h-100 w-100 p-2" >Deletar</button>
</form>
@endsection