@extends('Layouts.main_layout')
@section('title', 'Terceirização')

@section('content')

    <main class="profissao-container">
        <div class="profissao-image">
            <img src="{{asset('assets/imgs/colaborator.jpg')}}" alt="">
        </div>
        <div class="profissao-text">
            <h1>Benefícios da Terceirização com a <br> Coop Service</h1>
            <p>
                Contratar os serviços de terceirização de mão de obra da Coop Service é investir em eficiência, economia
                e
                qualidade. Oferecemos soluções personalizadas que permitem às empresas focarem em seu core business,
                enquanto cuidamos da gestão de profissionais qualificados e treinados.
            </p>
            <br>
            <p>
                Com a Coop Service, sua empresa reduz custos operacionais, otimiza processos, garante maior
                flexibilidade na
                alocação de recursos e assegura conformidade com a legislação trabalhista. Nossa atuação é pautada pela
                transparência, agilidade e excelência no atendimento, promovendo resultados concretos e sustentáveis
                para o
                seu negócio.
            </p>
            <a href="{{route('servicos')}}">Voltar</a>
        </div>

    </main>

@endsection
