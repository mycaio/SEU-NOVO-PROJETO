<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    use HasFactory;
    protected $fillable = [
        'descricao',
        'valor',
        'data',
        'categoria_id',
        'forma_pagamento_id',
    ];
    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }
    public function formaPagamento() {
        return $this->belongsTo(FormaPagamento::class);
    }
}
