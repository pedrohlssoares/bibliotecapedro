<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{

    public function index()
    {
        return response()->json(Livro::with(['autor', 'categoria'])->get());
    }

    public function store(Request $request)
    {
        $livro = Livro::create($request->all());
        return response()->json($livro, 201);
    }

    public function show(Livro $livro)
    {
        return response()->json($livro->load(['autor', 'categoria']));
    }

    public function update(Request $request, Livro $livro)
    {
        $livro->update($request->all());
        return response()->json($livro);
    }

    public function destroy(Livro $livro)
    {
        $livro->delete();
        return response()->json(['mensagem'=>'Livro excluído com sucesso!']);
    }
}
