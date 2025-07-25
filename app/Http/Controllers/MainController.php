<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{

    public function loginSubmit(Request $request)
    {
        $request->validate(
            // rulles
            [
                "login" => "required|email",
                "password" => "required"
            ],
            // message
            [
                "login.required" => "Este mampo é obrigatório",
                "login.email" => "O login precisa ser um email",

                "password.required" => "Este mampo é obrigatório"
            ]
        );

        $user = User::where('email', $request->input('login'))->first();

        if ($user && Hash::check($request->input('password'), $user->password)) {
            Auth::login($user);

            if ($user->tipo === 'visitante') {
                return redirect()->route('home');
            } else if ($user->tipo === 'servico') {
                if ($user->cargo == null) {
                    return redirect()->route("cargo");
                } else {
                    return redirect()->route('perfil');
                }
            } else if ($user->tipo === 'admin') {
                return redirect()->route('admin');
            }
        } else {
            $userNotExist = "Login ou Senha inválidos";
            return redirect()->route('login')->with(compact('userNotExist'));
        }
    }

    public function createAccountSubmit(Request $request)
    {
        $request->validate(
            // rulles
            [
                "nome" => "required|string|min:3",
                "email" => "required|email",
                "cidade" => "required|string",
                "phone" => "required",
                "password" => "required|min:6|max:16|confirmed"
            ],
            // message
            [
                "nome.required" => "Este campo é obrigatório",
                "nome.string" => "Apenas letras",
                "nome.min" => "O nome deve ter no :min letras",

                "email.required" => "Este campo é obrigatório",
                "email.email" => "Insira um E-mail válido",

                "cidade.required" => "Este campo é obrigatório",
                "cidade.string" => "Apenas letras",

                "phone.required" => "Este campo é obrigatório",

                "password.required" => "Este campo é obrigatório",
                "password.min" => "A senha deve ter no :min caracteres",
                "password.max" => "A senha deve ter no :max caracteres",
                "password.confirmed" => "As senhas devem ser iguais"
            ]
        );

        $verifyIfExistUser = User::where('email', $request->input('email'))->first();

        if ($verifyIfExistUser) {
            $userExist = "Este E-mail já esta sendo usado";
            return redirect()->route('create-account')->with(compact('userExist'));
        }

        User::create([
            "nome" => strtolower($request->input('nome')),
            "email" => strtolower($request->input('email')),
            "phone" => $request->input('phone'),
            "cidade" => strtolower($request->input('cidade')),
            "password" => strtolower($request->input('password')),
            "tipo" => strtolower($request->input('tipo'))
        ]);

        $loginsuccess = "Sua conta foi criada com sucesso !";
        return redirect()->route('login')->with(compact('loginsuccess'));
    }

    public function cargoSubmit(Request $request)
    {
        $cargo = $request->input('cargo');
        $user = Auth::user();

        $user->cargo = $cargo;
        $user->save();

        return redirect()->route('perfil');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function atualizar(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'nome' => 'required|string|min:3',
            'email' => 'required|email',
            'cidade' => 'required|string',
            'password' => 'nullable|min:6',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'curriculo' => 'nullable|mimes:pdf,doc,docx|max:2048',
        ]);

        $user->nome = $request->nome;
        $user->email = $request->email;
        $user->cidade = $request->cidade;

        // Atualiza senha somente se informada
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Se veio nova foto
        if ($request->hasFile('foto')) {
            // Deleta foto antiga, se existir
            if ($user->foto && file_exists(public_path('assets/fotos/' . $user->foto))) {
                unlink(public_path('assets/fotos/' . $user->foto));
            }

            // Salva nova imagem
            $nomeImagem = time() . '.' . $request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('assets/fotos'), $nomeImagem);
            $user->foto = $nomeImagem;
        }

        // se veio curriculo
        if ($request->hasFile('curriculo')) {
            // Exclui currículo antigo
            if ($user->curriculo && file_exists(public_path('curriculos/' . $user->curriculo))) {
                unlink(public_path('curriculos/' . $user->curriculo));
            }

            // Salva novo currículo
            $nomeCurriculo = time() . '.' . $request->curriculo->getClientOriginalExtension();
            $request->curriculo->move(public_path('assets/curriculos'), $nomeCurriculo);
            $user->curriculo = $nomeCurriculo;
        }

        $user->save();


        return back()->with('success', 'Perfil atualizado com sucesso!');
    }

    public function comentario(Request $request)
    {
        $request->validate(
            // rulles
            [
                "message" => "required|string|min:5|max:1000"
            ],
            // message
            [
                "message.required" => "Este campo é obrigatório",
                "message.string" => "A menssagem deve conter apenas letras",
                "message.min" => "A menssagem deve ter no minimo :min caracteres",
                "message.max" => "A menssagem deve ter no maximo :max caracteres",
            ]
        );

        if (Auth::check()) {
            Comentario::create([
                'user_id' => Auth::id(),
                'texto' => $request->input('message')
            ]);


            $messageSuccess = "Sua mensagem foi enviada com sucesso.";
            return redirect()->route('fale-conosco')->with(compact('messageSuccess'));
        } else {
            $youNeedCreateUser = "Para comentar, você precisa ter uma conta.";
            return redirect()->route('create-account')->with(compact('youNeedCreateUser'));
        }
    }

    public function faleConosco()
    {
        $comentarios = Comentario::with('user')->get();

        return view('Pages.fale-conosco', compact('comentarios'));
    }

    public function tipoProfissaoSubmit(Request $request)
    {
        $tipo_profissao = $request->input('tipo-profissao');
        $tipo_profissao = strtolower($tipo_profissao);

        $users = User::where('cargo', $tipo_profissao)->get();

        if ($users == null) {
            $users = [];
        }

        return view('Auth.exibe-profissao')->with(compact('users'));
    }

    public function perfil()
    {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->tipo == 'servico' || $user->tipo == 'visitante') {
                return view('Auth.perfil');
            } else {
                return view('Auth.admin');
            }
        } else {
            $create_account = "Para acessar o perfil você precisa ter uma conta";
            return redirect()->route('create-account')->with(compact('create_account'));
        }
    }
}
