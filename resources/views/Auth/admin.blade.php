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
            <div>
                <a href="#" class="btn-atualizar">ATUALIZAR</a>
            </div>
        </div>

        <div class="form-container">
            <div class="tipo-profissao">
                <form action="{{ route('tipo-profissao-submit') }}" method="post">
                    @csrf
                    <input type="submit"name="tipo-profissao" value="LIMPEZA">
                    <input type="submit"name="tipo-profissao" value="JARDINAGEM">
                    <input type="submit"name="tipo-profissao" value="PISCINEIRO">
                    <input type="submit"name="tipo-profissao" value="VIGILÂNCIA">
                    <input type="submit"name="tipo-profissao" value="GESTÃO DE ESTOQUE">
                    <input type="submit"name="tipo-profissao" value="OPERADOR DE EMPILHADEIRA">
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
