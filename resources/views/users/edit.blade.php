@extends('users/layouts.app')

@section('title','Editar o Usuario {$user->name }')
    

@section('content')
<h1>Editar o Usuario {{$user->name }} </h1>

@include('includes.validations.form')

<form action="{{route('user.update',$user->id)}}" method="post">
    
@method('PUT')
@include('users.partials.form')
</form>


@endsection