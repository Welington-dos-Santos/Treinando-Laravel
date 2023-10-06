@extends('layouts.app')

@section('title', 'Editar o Usuário')

@section('content')
  <h1>Editar o Usuário {{ $user->name }}</h1>

  @if ($errors->any())
      <ul class="errors">
        @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
      </ul>
  @endif

  <form action="{{ route('usuario.update', $user->id) }}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="name" placeholder="Nome:" value="{{ $user->name }}">
    <input type="email" name="email" placeholder="Email:" value="{{ $user->email }}">
    <input type="password" name="password" placeholder="Senha:">
    <button type="submit">Enviar</button>
  </form>
@endsection