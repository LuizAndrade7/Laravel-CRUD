<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;


class UsuariosController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function listar()
    {
        $usuarios = Usuarios::all();
        return view('usuarios.listar', compact('usuarios'));
    }


    public function cadastro($id = null)
    {
        $resultado = null;
        if ($id) {
            $resultado = Usuarios::find($id);
        }


        return view('usuarios.cadastro', compact('resultado'));
    }

    public function cadastrar(Request $request)
    {
        if ($request->id) {
            $usuario = Usuarios::find($request->id);
        } else {
            $usuario = new Usuarios;
        }

        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->senha = $request->senha;
        $usuario->save();
        return redirect()->back();
    }

    public function remover($id)
    {
        $usuario = Usuarios::find($id);
        if (!$usuario) {
            echo "Usuario não encontrado";
            exit();
        }
        $usuario->delete();

        return redirect()->back();
    }
};
