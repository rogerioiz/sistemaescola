<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    //
    public function listarTodos(request $request){
        // $produto = new Produto();
        // $listarProdutos = $produto->all();
        $listarProdutos = Produto::all();

        return view('produtos',['produtos'=>$listarProdutos]);
    }
}
