@extends('layouts.app')

@section('content')
  <h1>
    Listagem Usuarios
    (<a href="{{ route('usuario.create') }}">Cadastrar</a>)
  </h1>

  <ul>
    @foreach ($users as $user)
      <li>
        {{ $user->name }} -
        {{ $user->email }}
        <a href="{{ route('usuario.show', $user->id) }}">Detalhes</a>
        <a href="{{ route('usuario.edit', $user->id) }}">Editar</a>
      </li>
    @endforeach
  </ul>
@endsection