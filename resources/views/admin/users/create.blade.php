@extends('adminlte::page')

@section('title', 'Criar Usuário')

@section('content_header')
    <h1>Novo Usuário</h1>
@endsection

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <h5><i class="icon fas fa-ban"></i>Ocorreu um erro:</h5>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="post" class="form-horizontal mt-3">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nome Completo</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" id="name"
                               class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                               placeholder="Nome Completo">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-8">
                        <input type="email" name="email" id="email"
                               class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                               placeholder="E-mail válido">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Senha</label>
                    <div class="col-sm-8">
                        <input type="password" name="password" id="password"
                               class="form-control @error('password') is-invalid @enderror"
                               placeholder="Digite a sua senha">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password_confirmation" class="col-sm-2 col-form-label">Repita a Senha</label>
                    <div class="col-sm-8">
                        <input type="password" name="password_confirmation" id="password_confirmation"
                               class="form-control @error('password') is-invalid @enderror"
                               placeholder="Repita a sua senha">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-8">
                        <input type="submit" value="Cadastrar" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
