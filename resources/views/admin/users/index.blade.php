@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')
    <h1>Usuários</h1>
    <p class="pt-2">
        <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">Novo Usuário</a>
    </p>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-sm btn-secondary">Editar</a>
                            @if($loggedId !== intval($user->id))
                                <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post"
                                      class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir esse usuário?')">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Excluir" class="btn btn-sm btn-danger">
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{ $users->links() }}
@endsection
