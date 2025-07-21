@extends('Layouts.main_layout')
@section('title', 'Lista de Profissionais')

@section('content')

    <style>
        .profissao-container{
            width: 100%;
            height: 100%;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;

            /* background-color: yellow; */
        }

        .profissao-container table thead th,
        .profissao-container table tbody td{
            font-size: 1.3rem;
        }


    </style>


    <div class="profissao-container">
        <a href="{{route('admin')}}"class="btn btn-primary">Voltar</a>
        <table class="table table-dark table-striped table-hover">
            <thead>
                <tr>
                    <th>NOME</th>
                    <th>E-MAIL</th>
                    <th>TELEFONE</th>
                    <th>CIDADE</th>
                    <th>CARGO</th>
                    <th>DATA DE CRIAÇÃO</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->nome }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->cidade }}</td>
                        <td>{{ $user->cargo }}</td>
                        <td>{{ $user->created_at->format('d/m/Y') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Nenhum profissional encontrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
