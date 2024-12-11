<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Livros;
use App\Models\Usuarios;


class Emprestimos extends Model
{
    protected $table='emprestimos';
    protected $fillable=['id_usuario','id_livro','data_emprestimo','data_devolucao'];

    public function livro()
    {
        return $this->hasOne(Livros::class,'id','id_livro');
    }

    public function usuario()
    {
        return $this->hasOne(Usuarios::class,'id','id_usuario');
    }
}
