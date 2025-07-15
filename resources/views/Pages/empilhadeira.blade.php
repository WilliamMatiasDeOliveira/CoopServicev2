@extends('Layouts.main_layout')
@section('title', 'Empilhadeira')

@section('content')

    <main class="profissao-container">
        <div class="profissao-image">
            <img src="{{asset('assets/imgs/empilhadeira.jpeg')}}" alt="">
        </div>
        <div class="profissao-text">
            <h1>Serviços de Operador de Empilhadeira <br> Coop Service</h1>
            <p>
                Contratar os serviços de operador de empilhadeira da Coop Service é assegurar eficiência, segurança e
                agilidade nas operações logísticas da sua empresa. Nossos profissionais são qualificados, certificados e
                experientes no manuseio de cargas, respeitando todas as normas técnicas e de segurança do trabalho.
            </p>
            <br>
            <p>
                Com a Coop Service, sua empresa reduz riscos operacionais, melhora o fluxo de armazenagem e transporte
                interno, além de garantir maior produtividade e organização nos processos. Oferecemos soluções
                personalizadas para atender às demandas específicas do seu negócio com responsabilidade e excelência.
            </p>
            <a href="{{route('servicos')}}">Voltar</a>
        </div>

    </main>


@endsection
