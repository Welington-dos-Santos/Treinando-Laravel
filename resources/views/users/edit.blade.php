@extends('layouts.app')

@section('title', 'Editar o Usuário')

@section('content')
  <h1>Editar o Usuário {{ $user->name }}</h1>

@include('components.validation-form')

  <form action="{{ route('usuario.update', $user->id) }}" method="POST">
    @method('PUT')
    @include('users._partials.form')
  </form>
@endsection