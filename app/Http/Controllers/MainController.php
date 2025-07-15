<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function comentario(Request $request){
        $request->validate([
            "message"=>"required|string|min:5|max:1000"
        ]
        );

        Comentario::create([
            'user_id'=>1,
            'texto'=>$request->input('message')
        ]);
    }
}
