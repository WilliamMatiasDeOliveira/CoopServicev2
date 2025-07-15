@extends('Layouts.main_layout')
@section('title', 'Jardinagem')

@section('content')

    <main class="profissao-container">
        <div class="profissao-image">
            <img src="{{asset('assets/imgs/jardinagem.jpeg')}}" alt="">
        </div>
        <div class="profissao-text">
            <h1>Serviços de Jardinagem <br> Coop Service</h1>
            <p>
                Com os serviços de jardinagem da Coop Service, sua empresa garante áreas externas sempre bem cuidadas,
                limpas e visualmente agradáveis. Nossos profissionais são capacitados para realizar manutenção, poda,
                limpeza e conservação de jardins com eficiência, segurança e respeito ao meio ambiente.
            </p>
            <br>
            <p>
                Oferecemos soluções personalizadas que valorizam a imagem do seu negócio, promovem bem-estar aos
                colaboradores e visitantes, além de contribuir para um ambiente mais harmonioso e sustentável. Com a
                Coop Service, sua empresa conta com qualidade, pontualidade e excelência em cada detalhe.
            </p>
            <a href="{{route('servicos')}}">Voltar</a>
        </div>

    </main>

@endsection
