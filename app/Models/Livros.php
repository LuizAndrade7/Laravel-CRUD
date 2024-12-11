<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Autores;


class Livros extends Model
{
    protected $table='livros';
    protected $fillable=['titulo','id_aut'];


    public function autor()
    {
        return $this->hasOne(Autores::class,'id','id_aut');
    }
}

