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

        .perfil-container .left-menu p{
            color: #ff7300;
            font-size: 1.5rem;
        }

        .form-container {
            margin-left: 120rem;
            background-color: rgba(86, 94, 100, 0.5);
            padding: 2rem;
            border-radius: 1rem;
        }

        .form-container.visibility {
            margin: 0 auto;
            background-color: rgba(86, 94, 100, 0.5);
            padding: 2rem;
            border-radius: 1rem;
        }

        .form-container label {
            color: #ff7300;
            font-size: 1.2rem;
            margin-top: 1rem;
            font-weight: bold;
        }

        .form-container input {
            font-size: 1.5rem;
        }

        .form-container .files {
            margin-top: 2rem;
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

            <a href="#"onclick="mostrarForm()">ATUALIZAR</a>

            @if (Auth::user()->curriculo)
                <a href="{{ asset('assets/curriculos/' . Auth::user()->curriculo) }}" target="_blank">Ver Currículo</a>
            @else
                <p>Nenhum currículo enviado</p>
            @endif
        </div>

        <div class="form-container">
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

                    <label for="curriculo" class="form-label">Currículo (PDF ou DOC)</label>
                    <input type="file" name="curriculo" class="form-control" accept=".pdf,.doc,.docx">
                </div>

                <input type="submit"class="form-control btn btn-primary" value="ATUALIZAR">
            </form>
        </div>





    </div>

@endsection
