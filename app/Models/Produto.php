<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produto extends Model
{
    use HasFactory;
    /**
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array<int, string>
     */
    
    protected $fillable = [
        "nome",
        "descricao",
        "preco",
        "data_validade",
        "ativo",
    ];
        /**
     * Os atributos que devem ser convertidos para tipos nativos.
     *
     * @var array<string, string>
     */

    protected $casts = [
        "preco" => "decimal:2",
        "data_validade" => "date",
        "ativo" => "boolean",
    ];
}
