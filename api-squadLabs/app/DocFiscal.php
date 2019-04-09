<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocFiscal extends Model
{
    protected $table = 'doc_fiscal';
    protected $fillable = [
        'Tipo',
        'CnpjCpf',
        'Numero',
        'Serie',
        'Modelo',
        'Chave',
        'ValorTotal',
        'ValorProd',
        'ValorICMS',
        'ValorIPI',
        'Status'
    ];
}
