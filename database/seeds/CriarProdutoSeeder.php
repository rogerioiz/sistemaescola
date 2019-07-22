<?php

use Illuminate\Database\Seeder;
use App\Produto;

class CriarProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produto = new Produto();
        $produto->nome_produto = "Produto teste";
        $produto->save();
        
        factory(Produto::class, 1000)->create();
    }
}
