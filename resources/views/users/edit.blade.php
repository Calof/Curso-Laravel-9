@extends('users/layouts.app')

@section('title','Editar o Usuario {$user->name }')
    

@section('content')
<h1 class="text-2x1 font-semibold leading-tigh py-2" >Editar o Usuario {{$user->name }} </h1>

@include('users.includes.validations-form')

<form action="{{route('user.update',$user->id)}}" method="post">
    @method('PUT') 
    
      
   
@include('users.partials.form')
</form>


@endsection