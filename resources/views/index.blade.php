@extends('Layouts.main_layout')
@section('title', 'Home')

@section('content')

    <!-- container do slide -->
    <div class="box-container">
        <!-- slide 1 -->
        <main class="container">
            <section class="image">
                <img src="{{asset('assets/imgs/slide-1.jpg')}}" alt="">
            </section>
            <section class="description">
                <h2 class="title">Terceirização de Mão de Obra.</h2>
                <p>Esta precisando daquela forcinha na produção ?</p>
                <p>Contrate nossos serviços.</p>
                <br>
                <p>Disponibilizamos o profissional certo para você.</p>
            </section>
        </main>
        <!-- slide 2 -->
        <main class="container active">
            <section class="image">
                <img src="{{asset('assets/imgs/slide-2.png')}}" alt="">
            </section>
            <section class="description">
                <h2 class="title">RECRUTAMENTO</h2>
                <p>Você quer contratar ?</p>
                <p>E não quer burocracia ?</p>
                <p>Deixe toda a burocracia com a gente.</p>
                <br>
                <p>Selecionamos profissionais qualificados <br> para a sua empresa.</p>
            </section>
        </main>

        <!-- slide 3 -->
        <main class="container">
            <section class="image">
                <img src="{{asset('assets/imgs/slide-3.jpg')}}" alt="">
            </section>
            <section class="description">
                <h2 class="title">TRABALHO EM EQUIPE</h2>
                <p>Podemos fazer mais.</p>
                <p>Com uma equipe qualificada.</p>
                <br>
                <p>Escolhida especialmente para sua empresa.</p>
            </section>
        </main>
    </div>

@endsection
