@extends('Layouts.main_layout')
@section('title', 'Piscineiro')

@section('content')

    <main class="profissao-container">
        <div class="profissao-image">
            <img src="{{asset('assets/imgs/piscineiro.jpg')}}" alt="">
        </div>
        <div class="profissao-text">
            <h1>Serviços de Manutenção de Piscinas <br> Coop Service</h1>
            <p>
                Ao contratar os serviços de piscineiro da Coop Service, sua empresa ou residencia garante a manutenção
                adequada,
                segura e contínua de piscinas, com foco na limpeza, qualidade da água e bom funcionamento dos
                equipamentos. Nossos profissionais são treinados e seguem rigorosos padrões técnicos e sanitários.
            </p>
            <br>
            <p>
                Oferecemos soluções completas que evitam desperdícios, reduzem custos com correções emergenciais e
                asseguram um ambiente sempre pronto para uso, valorizando seu espaço e promovendo saúde e bem-estar. Com
                a Coop Service, sua empresa ou residencia conta com confiança, excelência e responsabilidade no cuidado com
                piscinas.
            </p>
            <a href="{{route('servicos')}}">Voltar</a>
        </div>

    </main>

@endsection
