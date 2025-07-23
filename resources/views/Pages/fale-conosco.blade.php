@extends('Layouts.main_layout')
@section('title', 'Fale Conosco')

@section('content')

    {{-- Se o usuario estiver logado e mandar uma menssagem
ele recebera uma menssagem de sucesso --}}
    @if (session('messageSuccess'))
        <div class="alert alert-success text-center"style="font-size:1.2rem;">
            {{ session('messageSuccess') }}
        </div>
    @endif

    <div class="fale-conosco-container">

        <section class="fale-conosco">
            <p>
                Para entrar em contato com agente acesse uma de nossas redes sociais.
            </p>
            <p>
                Ou se você preferir pode nos deixar um comentario : )
            </p>

            <form action="{{ route('comentario') }}" method="post">
                @csrf
                <div class="message">
                    <label for="message">Menssagem</label>
                    <textarea name="message" id="message" rows="5" cols="70" placeholder="Digite sua mensagem aqui ......"></textarea>
                    @error('message')
                        <div class="text-warning text-center"style="font-size:1.2rem">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="button-comentar">
                    <button type="submit" class="btn-comentar">COMENTAR</button>
                </div>
            </form>
        </section>
    </div>

    <div class="fale-conosco-comentarios">
        @if (isset($comentarios))
           @foreach ($comentarios as $comentario)
                <div class="user">
                    Nome : {{$comentario->user->nome}}
                    <br>
                    Cidade : {{$comentario->user->cidade}}
                    <br>
                    Comentario : {{$comentario->texto}}
                </div>
           @endforeach
        @endif
    </div>

    <script>
    // Espera o carregamento completo da página
    document.addEventListener('DOMContentLoaded', function () {
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
