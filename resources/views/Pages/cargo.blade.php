@extends('Layouts.main_layout')
@section('title', 'Cargos')

@section('content')



    <div class="cargo-container">
        <h2>Sua principal função</h2>
        <div class="cargo-box">

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
