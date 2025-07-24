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
    {{-- se o usuario tentar acessar o perfil sem ter conta --}}
    @if (session('create_account'))
        <div class="alert alert-danger text-center"style="font-size:1.2rem;">
            {{ session('create_account') }}
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

            <label for="phone" class="form-label">Telefone</label>
            <input type="phone"name="phone" class="form-control">
            @error('phone')
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

    <script>
        // Espera o carregamento completo da página
        document.addEventListener('DOMContentLoaded', function() {
            // Seleciona todos os elementos com a classe 'alert'
            const alerts = document.querySelectorAll('.alert');

            // Espera 3 segundos antes de ocultar
            setTimeout(() => {
                alerts.forEach(alert => {
                    // Opcional: animação suave de desvanecimento
                    alert.style.transition = 'opacity 0.5s ease';
                    alert.style.opacity = '0';

                    // Remove do DOM após a animação
                    setTimeout(() => {
                        alert.remove();
                    }, 500); // tempo da transição
                });
            }, 3000); // 3000ms = 3 segundos
        });
    </script>



@endsection
