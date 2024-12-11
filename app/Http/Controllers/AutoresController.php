<?php

namespace App\Http\Controllers;

use App\Models\Autores;
use Illuminate\Http\Request;


class AutoresController extends Controller
{
    public function listar()
    {
        $autores = Autores::all();
        return view('autores.listar', compact('autores'));
    }

    public function cadastro($id = null)
    {
        $resultado = null;
        if ($id) {
            $resultado = Autores::find($id);
        }

        return view('autores.cadastro', compact('resultado'));
    }

    public function cadastrar(Request $request){
    if ($request->id) {
        $autores = Autores::find($request->id);
    } else {
        $autores = new Autores;
    }
        $autores->nome = $request->nome;
        $autores->save();
        return redirect()->back();
    }

    public function remover($id)
    {
        $autores = Autores::find($id);
        if (!$autores) {
            echo "Autor não encontrado";
            exit();
        }
        $autores->delete();

        return redirect()->back();
    }
};

