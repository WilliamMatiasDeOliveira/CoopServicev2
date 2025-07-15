@extends('Layouts.main_layout')
@section('title', 'Recrutamento')

@section('content')

    <main class="profissao-container">
        <div class="profissao-image">
            <img src="{{asset('assets/imgs/recrutamento.jpg')}}" alt="">
        </div>
        <div class="profissao-text">
            <h1>Recrutamento e Seleção com a Coop Service</h1>
            <p>
                Ao contratar os serviços de recrutamento e seleção da Coop Service, sua empresa garante agilidade,
                assertividade e economia nos processos de contratação. Contamos com uma equipe especializada na
                identificação de talentos alinhados à cultura e às necessidades do seu negócio.
            </p>
            <br>
            <p>
                Utilizamos metodologias modernas, criteriosas e eficazes para atrair, avaliar e selecionar os melhores
                profissionais, reduzindo o tempo e os custos com turnover e aumentando a produtividade. Com a Coop
                Service, sua empresa conquista um processo seletivo mais estratégico, seguro e com foco em resultados.
            </p>
            <a href="{{route('servicos')}}">Voltar</a>
        </div>

    </main>

@endsection
