@extends('users/layouts.app')

@section('title','novo usuario')
    

@section('content')
<h1>Novo usuario </h1>


@include('includes.validations-form')
<form action="{{route('users.store')}}" method="post">
@csrf
@include('users.partials.form')
</form>


@endsection