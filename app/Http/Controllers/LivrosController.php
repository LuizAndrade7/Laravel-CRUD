<?php

namespace App\Http\Controllers;

use App\Models\Livros;
use Illuminate\Http\Request;
use App\Models\Autores;


class LivrosController extends Controller
{
    public function listar()
    {
        $livros = Livros::all();
        return view('livros.listar', compact('livros'));
    }

    public function cadastro($id = null)
    {
        $resultado = null;
        if ($id) {
            $resultado = Livros::find($id);
        }
        $autores = Autores::get();

        return view('livros.cadastro', compact('resultado', 'autores'));
    }

    public function cadastrar(Request $request)
    {
        if ($request->id) {
            $livros = Livros::find($request->id);
        } else {
            $livros = new Livros;
        }
        $livros->titulo = $request->titulo;
        $livros->id_aut = $request->id_aut;
        $livros->save();
        return redirect()->back();
    }

    public function remover($id)
    {
        $livros = Livros::find($id);
        if (!$livros) {
            echo "Autor não encontrado";
            exit();
        }
        $livros->delete();

        return redirect()->back();
    }
};
