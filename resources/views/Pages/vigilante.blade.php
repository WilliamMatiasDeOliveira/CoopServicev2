@extends('Layouts.main_layout')
@section('title', 'Vigilante')

@section('content')

    <main class="profissao-container">
        <div class="profissao-image">
            <img src="{{asset('assets/imgs/segurança.jpeg')}}" alt="">
        </div>
        <div class="profissao-text">
            <h1>Serviços de Vigilância <br> Coop Service</h1>
            <p>
                Contratar os serviços de vigilante da Coop Service é garantir proteção patrimonial com eficiência,
                responsabilidade e alto padrão operacional. Nossos profissionais são treinados, uniformizados e
                preparados para atuar com postura preventiva, controle de acessos e pronta resposta a situações de
                risco.
            </p>
            <br>
            <p>
                Oferecemos soluções personalizadas conforme o perfil e as necessidades da sua empresa ou residencia,
                contribuindo para
                a segurança de colaboradores, clientes, moradores e ativos. Com a Coop Service, sua empresa ou
                residencia conta com vigilância
                confiável, discrição, e total conformidade com as normas legais e de segurança.
            </p>
            <a href="{{route('servicos')}}">Voltar</a>
        </div>

    </main>

@endsection
