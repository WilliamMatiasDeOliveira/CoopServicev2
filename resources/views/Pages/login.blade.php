@extends('Layouts.main_layout')
@section('title', 'Login')

@section('content')

{{-- Se a conta foi criada com sucesso --}}
@if(session('loginsuccess'))
    <div class="alert alert-success text-center"style="font-size:1.2rem;">
        {{session('loginsuccess')}}
    </div>
@endif
{{-- Se o login ou a senha for inválidos --}}
@if (session('userNotExist'))
    <div class="alert alert-danger text-center"style="font-size:1.2rem;">
        {{session('userNotExist')}}
    </div>
@endif

    <div class="formLogin">
        <h1>LOGIN</h1>
        <form action="{{ route('login-submit') }}" method="post">
            @csrf
            <label for="login"class="form-label">Login</label>
            <input type="text"name="login" class="form-control"placeholder="email@example.com">
            @error('login')
                <div class="text-warning"style="font-size:1.2rem;">
                    {{$message}}
                </div>
            @enderror

            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" class="form-control">
            @error('password')
                <div class="text-warning"style="font-size:1.2rem;">
                    {{$message}}
                </div>
            @enderror

            <div class="links">
                <a href="{{route('create-account')}}">Ainda Não Tem Conta ?</a>
            </div>

            <input type="submit"value="LOGIN"class="btn btn-primary form-control">

        </form>
    </div>



@endsection
