<?php

namespace estoque\Http\Controllers;

use estoque\Produto;
use Illuminate\Support\Facades\Request;

class ProdutoController extends Controller {

    public function lista() {
        $produtos = Produto::all();
        return view('produto.listagem')
            ->with('produtos', $produtos);
    }

    public function mostra($id) {
        $produto = Produto::find($id);
        if (empty($produto)) {
            return "Esse produto não existe";
        }
        return view('produto.detalhes')
            ->with('p', $produto);
    }

    public function novo() {
        return view('produto.formulario');
    }

    public function adiciona() {
        Produto::create(Request::all());
        return redirect()
            ->action('ProdutoController@lista')
            ->withInput(Request::only('nome'));
    }

    public function remove($id) {
        Produto::find($id)->delete();
        return redirect()
            ->action('ProdutoController@lista');
    }
}
