@extends('Layouts.main_layout')
@section('title', 'Estoque')

@section('content')

    <main class="profissao-container">
        <div class="profissao-image">
            <img src="{{asset('assets/imgs/estoque.jpeg')}}" alt="">
        </div>
        <div class="profissao-text">
            <h1>Gestão de Estoque <br> Coop Service</h1>
            <p>
                Ao contratar os serviços de gestão de estoque da Coop Service, sua empresa garante controle, organização
                e eficiência operacional. Nossos profissionais são capacitados para gerenciar entradas, saídas,
                inventários e fluxos de materiais com precisão e responsabilidade.
            </p>
            <br>
            <p>
                Oferecemos soluções sob medida que reduzem perdas, evitam desperdícios, otimizam processos logísticos e
                asseguram maior agilidade na tomada de decisões. Com a Coop Service, sua empresa ganha em produtividade,
                economia e confiabilidade na gestão de seus estoques.
            </p>
            <a href="{{route('servicos')}}">Voltar</a>
        </div>

    </main>


@endsection
