<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $table = 'livros';
    protected $fillable = ['titulo', 'isbn', 'anopublicacao', 'descricao', 'paginas', 'id_autor', 'id_categoria'];

    public function autor()
    {
        return $this->belongsTo(Autor::class, 'id_autor');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

}
