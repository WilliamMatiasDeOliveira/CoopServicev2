@extends('Layouts.main_layout')
@section('title', 'Cargos')

@section('content')

    <style>
        .cargo-container {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;


        }

        .cargo-container .cargo-box {
            width: 50rem;
            height: 60%;
            padding: 2rem;
            border-radius: 1rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            background-color: rgba(86, 94, 100, 0.5);
        }

        .cargo-container .cargo-box form {
            color: #ff7300;
            font-size: 2rem;
        }

        .radio-group {
            display: flex;
            flex-wrap: wrap;
            gap: 3rem;
            justify-content: center;
            padding: 1rem;
        }

        .radio-group label {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            cursor: pointer;
            font-size: 1.5rem;
        }

        .btn-primary{
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            font-family: orbitron, sans-serif;
            font-size: 1.5rem;
        }

        .cargo-box h2{
            color: white;
            text-shadow: 2px 2px 3px silver;
        }
    </style>

    <div class="cargo-container">
        <div class="cargo-box">
            <h2>Sua principal função</h2>
            <form action="{{ route('cargo-submit') }}" method="post">
                @csrf

                <div class="radio-group">
                    <label><input type="radio"name="cargo" value="limpeza">Limpeza</label>
                    <label><input type="radio"name="cargo" value="jardinagem">Jardinagem</label>
                    <label><input type="radio"name="cargo" value="piscineiro">Piscineiro</label>
                    <label><input type="radio"name="cargo" value="vigilancia">Vigilância</label>
                    <label><input type="radio"name="cargo" value="estoque">Gestão de Estoque</label>
                    <label><input type="radio"name="cargo" value="empilhadeira">Operador de Empilhadeira</label>
                </div>
                <input type="submit"class="btn btn-primary">
            </form>
        </div>
    </div>

@endsection
