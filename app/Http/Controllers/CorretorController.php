<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Corretor;

class CorretorController extends Controller
{
    public function index()
    {
        $corretores = Corretor::all();
        return view('corretores.index', compact('corretores'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cpf' => 'required|digits:11|unique:corretores,cpf',
            'creci' => 'required|min:2',
            'name' => 'required|min:2',
        ]);

        Corretor::create($validated);
        return redirect()->route('corretores.index')->with('success', 'Corretor cadastrado com sucesso!');
    }

    public function destroy($id)
    {
        Corretor::findOrFail($id)->delete();
        return redirect()->route('corretores.index')->with('success', 'Corretor excluído com sucesso!');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'cpf' => 'required|digits:11|unique:corretores,cpf,' . $id,
            'creci' => 'required|min:2',
            'name' => 'required|min:2',
        ]);

        $corretor = Corretor::findOrFail($id);
        $corretor->update($validated);
        return redirect()->route('corretores.index')->with('success', 'Corretor atualizado com sucesso!');
    }
    public function edit($id)
    {
        $corretor = Corretor::findOrFail($id); // Busca o corretor pelo ID
        return view('corretores.edit', compact('corretor')); // Retorna a view de edição
    }

}
