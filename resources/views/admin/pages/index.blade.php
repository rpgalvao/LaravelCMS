@extends('adminlte::page')

@section('title', 'Páginas')

@section('content_header')
    <h1>Minhas Páginas</h1>
    <p class="pt-2">
        <a href="{{ route('pages.create') }}" class="btn btn-sm btn-primary">Nova Página</a>
    </p>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th width="50px">ID</th>
                    <th>Título</th>
                    <th width="200px">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pages as $page)
                    <tr>
                        <td>{{ $page->id }}</td>
                        <td>{{ $page->title }}</td>
                        <td>
                            <a href="" target="_blank" class="btn btn-sm btn-success">Ver</a>
                            <a href="{{ route('pages.edit', ['page' => $page->id]) }}" class="btn btn-sm btn-secondary">Editar</a>
                            <form action="{{ route('pages.destroy', ['page' => $page->id]) }}" method="post"
                                  class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir essa página?')">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Excluir" class="btn btn-sm btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{ $pages->links() }}
@endsection
