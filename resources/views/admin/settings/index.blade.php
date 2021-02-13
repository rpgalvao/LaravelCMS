@extends('adminlte::page')

@section('title', 'Configurações')

@section('content_header')
    <h1>Configurações</h1>
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
    @if(session('warning'))
        <div class="alert alert-success">
            {{ session('warning') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('setting.save') }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Título do Site</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" id="title" value="{{ $settings['title'] }}" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="subtitle" class="col-sm-2 col-form-label">Subtítulo do Site</label>
                    <div class="col-sm-10">
                        <input type="text" name="subtitle" id="subtitle" value="{{ $settings['subtitle'] }}" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">E-mail de Contato</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" id="email" value="{{ $settings['email'] }}" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bgcolor" class="col-sm-2 col-form-label">Cor do fundo</label>
                    <div class="col-sm-10">
                        <input type="color" name="bgcolor" id="bgcolor" value="{{ $settings['bgcolor'] }}" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="textcolor" class="col-sm-2 col-form-label">Cor do texto</label>
                    <div class="col-sm-10">
                        <input type="color" name="textcolor" id="textcolor" value="{{ $settings['textcolor'] }}" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="submit" value="Salvar" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
