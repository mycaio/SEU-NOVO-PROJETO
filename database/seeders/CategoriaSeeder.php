<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        $categorias = ['Alimentação', 'Transporte', 'Saúde', 'Lazer', 'Educação'];
        foreach ($categorias as $nome) {
            Categoria::create(['nome' => $nome]);
        }
    }
}
