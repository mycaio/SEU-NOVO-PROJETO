<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FormaPagamento;

class FormaPagamentoSeeder extends Seeder
{
    public function run()
    {
        $formas = ['Dinheiro', 'Cartão de Crédito', 'Cartão de Débito', 'Pix', 'Boleto'];
        foreach ($formas as $nome) {
            FormaPagamento::create(['nome' => $nome]);
        }
    }
}
