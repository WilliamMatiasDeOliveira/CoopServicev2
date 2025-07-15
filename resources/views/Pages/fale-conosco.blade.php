@extends('Layouts.main_layout')
@section('title', 'Fale Conosco')

@section('content')

    <div class="fale-conosco-container">

        <section class="fale-conosco">
            <p>
                Para entrar em contato com agente acesse uma de nossas redes sociais.
            </p>
            <p>
                Ou se você preferir pode nos deixar um comentario : )
            </p>

            <form action="#" method="post">
                <div class="message">
                    <label for="message">Menssagem</label>
                    <textarea name="message" id="message" rows="5" cols="70" placeholder="Digite sua mensagem aqui ......"></textarea>
                    </textarea>
                </div>

                <div class="button-comentar">
                    <button type="submit" class="btn-comentar">COMENTAR</button>
                </div>
            </form>
        </section>
    </div>

@endsection
