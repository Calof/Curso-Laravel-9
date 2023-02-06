@extends('users/layouts.app')

@section('title','novo usuario')
    

@section('content')
<h1 class="text-2x1 font-semibold leading-tigh py-2" >Novo usuario </h1>


@include('users.includes.validations-form')
<form action="{{route('users.store')}}" method="post">
    
@csrf
@include('users.partials.form')
</form>


@endsection