@extends('Layouts.main_layout')
@section('title', 'Perfil')

@section('content')

    <style>
        .perfil-container {
            width: 100%;
            height: 100%;
            display: flex;

            /* background-color: yellow; */
        }

        .perfil-container .left-menu {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 20%;
            height: 100%;
            padding: 2rem;
            border-radius: 0 2rem 2rem 0;

            background-color: rgba(86, 94, 100, 0.5);
        }

        .perfil-container .left-menu .image {
            width: 40%;
            height: 20%;

            /* background: green; */
        }

        .perfil-container .left-menu .image img {
            width: 100%;
            border-radius: 1rem;
        }

        .perfil-container .left-menu .dados {
            color: white;
        }

        .perfil-container .left-menu .dados h2 {
            font-size: 1.5rem;
        }

        .perfil-container .left-menu .dados span {
            font-size: 1.5rem;
            color: #ff7300;
        }

        .perfil-container .left-menu a {
            text-decoration: none;
            background-color: #ff7300;
            padding: 0.5rem 3rem;
            color: white;
            font-weight: 700;
            border-radius: 1rem;
            margin-bottom: 3rem;
        }

        .perfil-container .left-menu p {
            color: #ff7300;
            font-size: 1.5rem;
        }

        .form-container {
            display: flex;
            align-items: center;
            flex-direction: column;
            width: 100%;
            padding: 2rem;

        }

        .form-container .tipo-profissao {
            width: 100%;
            display: flex;
            justify-content: center;

            /* background-color: yellow; */
        }

        .form-container .tipo-profissao input {
            margin: 0 1.5rem;
            padding: 0.5rem;
        }

        .form-container .form-update {
            display: none;
            margin: 3rem auto;
            padding: 2rem;
            border-radius: 1rem;

            background-color: rgba(86, 94, 100, 0.5);
        }

        .form-container .form-update label {
            color: #ff7300;
            font-size: 1.2rem;
            margin-top: 1rem;
            font-weight: bold;
        }

        .form-container .form-update input{
            font-size: 1.5rem;
        }

        .form-container .form-update.visivel {
                display: block;
                background-color: rgba(86, 94, 100, 0.5);
                padding: 2rem;
                border-radius: 1rem;
            }

    </style>

    <div class="perfil-container">
        <div class="left-menu">
            @if (Auth::user()->foto)
                <div class="image">
                    <img src="{{ asset('assets/fotos/' . Auth::user()->foto) }}" alt="Foto do usuário" width="150">
                </div>
            @else
                <div class="image">
                    <img src="{{ asset('assets/fotos/default-user.png') }}" alt="Foto padrão" width="150">
                </div>
            @endif
            <div class="dados">
                <span>Nome</span>
                <h2>{{ Auth::user()->nome }}</h2>
                <span>E-mail</span>
                <h2>{{ Auth::user()->email }}</h2>
                <span>Cidade</span>
                <h2>{{ Auth::user()->cidade }}</h2>
            </div>

            <a href="#" class="btn-atualizar">ATUALIZAR</a>

        </div>

        <div class="form-container">
            <div class="tipo-profissao">
                <form action="{{route('tipo-profissao-submit')}}" method="post">
                    @csrf
                    <input type="submit"name="tipo-profissao" value="LIMPEZA" class="btn btn-primary form-controll">
                    <input type="submit"name="tipo-profissao" value="JARDINAGEM" class="btn btn-primary form-controll">
                    <input type="submit"name="tipo-profissao" value="PISCINEIRO" class="btn btn-primary form-controll">
                    <input type="submit"name="tipo-profissao" value="VIGILÂNCIA" class="btn btn-primary form-controll">
                    <input type="submit"name="tipo-profissao" value="GESTÃO DE ESTOQUE"
                        class="btn btn-primary form-controll">
                    <input type="submit"name="tipo-profissao"
                        value="OPERADOR DE EMPILHADEIRA"class="btn btn-primary form-controll">
                </form>
            </div>

            <div class="form-update">
                <form action="{{ route('atualizar') }}" method="post"enctype="multipart/form-data">
                    @csrf

                    <label for="nome"class="form-label">Nome</label>
                    <input type="text"name="nome" class="form-control" value="{{ Auth::user()->nome }}">

                    <label for="email"class="form-label">E-mail</label>
                    <input type="text"name="email" class="form-control" value="{{ Auth::user()->email }}">

                    <label for="cidade"class="form-label">Cidade</label>
                    <input type="text"name="cidade" class="form-control" value="{{ Auth::user()->cidade }}">

                    <label for="password"class="form-label">Senha</label>
                    <input type="password"name="password" class="form-control">

                    <div class="files">
                        <label for="foto">Foto</label>
                        <input type="file"name="foto" class="form-control">

                    </div>

                    <input type="submit"class="form-control btn btn-primary" value="ATUALIZAR">
                </form>
            </div>

        </div>



    </div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.querySelector('.btn-atualizar');
        const form = document.querySelector('.form-update');

        if (btn && form) {
            btn.addEventListener('click', function(event) {
                event.preventDefault(); // evitar que o link pule para o topo
                form.classList.toggle('visivel'); // alterna a visibilidade
            });
        }
    });
</script>



@endsection
