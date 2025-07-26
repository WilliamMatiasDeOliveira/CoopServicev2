@extends('Layouts.main_layout')
@section('title', 'Perfil')

@section('content')


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


            <div class="buttons">
                <a href="#" class="btn-atualizar">ATUALIZAR</a>
                @if (Auth::user()->curriculo)
                    <a href="{{ asset('assets/curriculos/' . Auth::user()->curriculo) }}"
                        target="_blank"class="btn-atualizar">VER CURRÍCULO</a>
                @else
                    <p>Nenhum currículo enviado</p>
                @endif
            </div>
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

                    <label for="curriculo" class="form-label">Currículo (PDF ou DOC)</label>
                    <input type="file" name="curriculo" class="form-control" accept=".pdf,.doc,.docx">
                </div>

                <input type="submit"class="btn-atualizar" value="ATUALIZAR">
            </form>
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
