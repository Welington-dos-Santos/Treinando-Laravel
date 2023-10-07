@extends('layouts.app')

@section('title', 'Novo Usuário')

@section('content')
  <h1>Novo Usuário</h1>

@include('components.validation-form')

  <form action="{{ route('usuario.store') }}" method="POST">
    @csrf
    @include('users._partials.form')
  </form>
@endsection