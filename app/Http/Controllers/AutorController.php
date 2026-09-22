<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{

    public function index()
    {
        return response()->json(Autor::all());
    }

    public function store(Request $request)
    {
        $autor = Autor::create($request->all());
        return response()->json($autor, 201);
    }

    public function show(Autor $autor)
    {
        return response()->json($autor);
    }

    public function update(Request $request, Autor $autor)
    {
        $autor->update($request->all());
        return response()->json($autor);
    }

    public function destroy(Autor $autor)
    {
        $autor->delete();
        return response()->json(['mensagem' => 'Autor removido com sucesso']);
    }
}
