@extends('Layouts.main_layout')
@section('title', 'Limpeza')

@section('content')

    <main class="profissao-container">
        <div class="profissao-image">
            <img src="{{asset('assets/imgs/card-limpeza.jpeg')}}" alt="">
        </div>
        <div class="profissao-text">
            <h1>Serviços de Auxiliar de Limpeza <br> Coop Service</h1>
            <p>
                Contratar os serviços de auxiliar de limpeza da Coop Service é garantir ambientes limpos, organizados e
                seguros, com alto padrão de qualidade. Nossos profissionais são treinados, uniformizados e capacitados
                para atuar com eficiência, discrição e responsabilidade, seguindo todos os protocolos de higiene e
                segurança.
            </p>
            <br>
            <p>
                Oferecemos soluções sob medida para cada cliente, com foco na produtividade, redução de custos
                operacionais e na preservação da imagem institucional da sua empresa. Com a Coop Service, você tem
                tranquilidade, qualidade e confiança na manutenção do seu ambiente corporativo.
            </p>
            <a href="{{route('servicos')}}">Voltar</a>
        </div>

    </main>

@endsection
