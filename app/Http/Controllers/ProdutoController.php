<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::latest()->paginate(5);

        return view("produtos.index", compact("produtos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("produtos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate ([
            "nome" => "required|string|max:255",
            "descricao" => "nullable|string",
            "preco" => "required|numeric|min:0",
            "data_validade" => "required|date",
            "ativo" => "sometimes|boolean",
        ]);

        Produto::create($request->all());

        return redirect()->route("produtos.index")
        ->with("sucesso","Produto criado!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        return view("produtos.show", compact("produto"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        return view("produtos.edit", compact("produto"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            "nome"=>"required|string|max:255",
            "descricao"=> "nullable|string",
            "preco"=>"required|numeric|min:0",
            "data_validade"=> "required|date",
        ]);

        $dados = $request->all();
        $dados["ativo"] = $request->has("ativo");

        $produto -> update($dados);

        return redirect()-> route("produtos.index")
        ->with("sucesso", "Produto atualizado!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        $produto -> delete();

        return redirect()->route("produtos.index")
        -> with("sucesso", "Produto apagado!");
    }
}
