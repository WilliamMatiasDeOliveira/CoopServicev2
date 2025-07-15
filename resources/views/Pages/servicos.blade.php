@extends('Layouts.main_layout')
@section('title', 'Serviços')

@section('content')

    <section class="service-container">
        <h1>Nossos Serviços</h1>
        <div class="service-box">
            <div class="colaborator">
                <div class="colaborator-image">
                    <img src="{{asset('assets/imgs/colaborator.jpg')}}" alt="">
                </div>
                <div class="colaborator-name">
                    <h2>TERCEIRIZAÇÃO DE MÃO DE OBRA</h2>
                    <div class="colaborator-btn">
                        <a href="{{route('terceirizacao')}}">Ver Detalhes</a>
                    </div>
                </div>
            </div>
            <div class="colaborator">
                <div class="colaborator-image">
                    <img src="{{asset('assets/imgs/recrutamento.jpg')}}" alt="">
                </div>
                <div class="colaborator-name">
                    <h2>RECRUTAMENTO E SELEÇÃO</h2>
                    <div class="colaborator-btn">
                        <a href="{{route('recrutamento')}}">Ver Detalhes</a>
                    </div>
                </div>
            </div>
            <div class="colaborator">
                <div class="colaborator-image">
                    <img src="{{asset('assets/imgs/card-limpeza.jpeg')}}" alt="">
                </div>
                <div class="colaborator-name">
                    <h2>AUXILIAR DE LIMPEZA</h2>
                    <div class="colaborator-btn">
                        <a href="{{route('limpeza')}}">Ver Detalhes</a>
                    </div>
                </div>
            </div>
            <div class="colaborator">
                <div class="colaborator-image">
                    <img src="{{asset('assets/imgs/jardinagem.jpeg')}}" alt="">
                </div>
                <div class="colaborator-name">
                    <h2>JARDINAGEM</h2>
                    <div class="colaborator-btn">
                        <a href="{{route('jardinagem')}}">Ver Detalhes</a>
                    </div>
                </div>
            </div>
            <div class="colaborator">
                <div class="colaborator-image">
                    <img src="{{asset('assets/imgs/piscineiro.jpg')}}" alt="">
                </div>
                <div class="colaborator-name">
                    <h2>PISCINEIRO</h2>
                    <div class="colaborator-btn">
                        <a href="{{route('piscineiro')}}">Ver Detalhes</a>
                    </div>
                </div>
            </div>
            <div class="colaborator">
                <div class="colaborator-image">
                    <img src="{{asset('assets/imgs/segurança.jpeg')}}" alt="">
                </div>
                <div class="colaborator-name">
                    <h2>VIGILÂNCIA</h2>
                    <div class="colaborator-btn">
                        <a href="{{route('vigilante')}}">Ver Detalhes</a>
                    </div>
                </div>
            </div>
            <div class="colaborator">
                <div class="colaborator-image">
                    <img src="{{asset('assets/imgs/estoque.jpeg')}}" alt="">
                </div>
                <div class="colaborator-name">
                    <h2>GESTÃO DE ESTOQUE</h2>
                    <div class="colaborator-btn">
                        <a href="{{route('estoque')}}">Ver Detalhes</a>
                    </div>
                </div>
            </div>
            <div class="colaborator">
                <div class="colaborator-image">
                    <img src="{{asset('assets/imgs/empilhadeira.jpeg')}}" alt="">
                </div>
                <div class="colaborator-name">
                    <h2>OPERADOR DE EMPLILHADEIRA</h2>
                    <div class="colaborator-btn">
                        <a href="{{route('empilhadeira')}}">Ver Detalhes</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
