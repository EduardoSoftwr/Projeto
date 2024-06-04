<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function create()
    {
        return view('adicionar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'valor' => 'required|numeric',
        ]);

        Produto::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'tipo' => $request->tipo,
            'valor' => $request->valor,
        ]);

        return redirect()->route('produtos')->with('success', 'Produto adicionado com sucesso!');
    }

    public function editAll()
    {
        $produtos = Produto::all();
        return view('editar', compact('produtos'));
    }

    public function index()
    {
        $produtos = Produto::all();
        return view('produtos', compact('produtos'));
    }

    public function edit(Produto $produto)
    {
        return view('editar', compact('produto'));
    }
    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'valor' => 'required|numeric',
        ]);

        $produto->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'tipo' => $request->tipo,
            'valor' => $request->valor,
        ]);

        return redirect()->route('produtos')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()->route('produtos')->with('success', 'Produto excluído com sucesso!');
    }
}
