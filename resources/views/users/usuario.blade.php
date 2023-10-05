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
      </li>
    @endforeach
  </ul>
@endsection