@extends('adminlte::page')

@section('title', 'Meu Perfil')

@section('content_header')
    <h1>Meu Perfil</h1>
@endsection

@section('content')
    <p>NOME: {{ $user['name'] }}</p>
@endsection
