@extends('Layouts.main_layout')
@section('title', 'Criar Conta')

@section('content')

    {{-- Se o usuario já existir --}}
    @if (session('userExist'))
        <div class="alert alert-danger text-center"style="font-size:1.2rem;">
            {{ session('userExist') }}
        </div>
    @endif

    {{-- se o usuario tentar comentar sem ter conta --}}
    @if (session('youNeedCreateUser'))
        <div class="alert alert-danger text-center"style="font-size:1.2rem;">
            {{ session('youNeedCreateUser') }}
        </div>
    @endif

    <div class="create-account">
        <h1>CRIAR CONTA</h1>
        <form action="{{ route('create-account-submit') }}" method="post">
            @csrf
            <label for="nome"class="form-label">Nome</label>
            <input type="text"name="nome" class="form-control">
            @error('nome')
                <div class="text-warning"style="font-size: 1.2rem;">
                    {{ $message }}
                </div>
            @enderror

            <label for="email" class="form-label">E-mail</label>
            <input type="email"name="email" class="form-control">
            @error('email')
                <div class="text-warning"style="font-size: 1.2rem;">
                    {{ $message }}
                </div>
            @enderror

            <label for="cidade" class="form-label">Cidade</label>
            <input type="text"name="cidade" class="form-control">
            @error('cidade')
                <div class="text-warning"style="font-size: 1.2rem;">
                    {{ $message }}
                </div>
            @enderror

            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" class="form-control">
            @error('password')
                <div class="text-warning"style="font-size: 1.2rem;">
                    {{ $message }}
                </div>
            @enderror

            <label for="password_confirmation" class="form-label">Confirmar Senha</label>
            <input type="password" name="password_confirmation" class="form-control">

            <div class="radio">
                <label>
                    <input type="radio" name="tipo" value="visitante"checked> Visitante
                </label>

                <label>
                    <input type="radio" name="tipo" value="servico"> Prestador de Serviço
                </label>
            </div>




            <div class="links">
                <a href="{{ route('login') }}">Já Tem Conta ?</a>
            </div>


            <input type="submit"value="CADASTRAR" class="btn btn-primary form-control">

        </form>
    </div>



@endsection
