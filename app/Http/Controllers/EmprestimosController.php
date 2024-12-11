<?php

namespace App\Http\Controllers;

use App\Models\Emprestimos;
use Illuminate\Http\Request;
use App\Models\Livros;
use App\Models\Usuarios;


class EmprestimosController extends Controller
{
    public function listar()
    {
        $emprestimos = Emprestimos::get();
        return view('emprestimos.listar', compact('emprestimos'));
    }

    public function cadastro($id = null)
    {
        $resultado = null;
        if ($id) {
            $resultado = Emprestimos::find($id);
        }
        $livros = Livros::get();
        $usuarios = Usuarios::get();

        return view('emprestimos.cadastro', compact('resultado', 'livros', 'usuarios'));
    }

    public function cadastrar(Request $request)
    {
        if ($request->id) {
            $emprestimos = Emprestimos::find($request->id);
        } else {
            $emprestimos = new Emprestimos;
        }
        $emprestimos->id_usuario = $request->id_usuario;
        $emprestimos->id_livro = $request->id_livro;
        $emprestimos->data_emprestimo = $request->data_emprestimo;
        $emprestimos->data_devolucao = $request->data_devolucao;
        $emprestimos->save();
        return redirect()->back();
    }

    public function remover($id)
    {
        $emprestimos = Emprestimos::find($id);
        if (!$emprestimos) {
            echo "Emprestimo não encontrado";
            exit();
        }
        $emprestimos->delete();

        return redirect()->back();
    }
};
