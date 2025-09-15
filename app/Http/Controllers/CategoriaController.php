<?php
namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Http\Requests\CategoriaRequest;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index() {
        $categorias = Categoria::paginate(10);
        return view('categorias.index', compact('categorias'));
    }
    public function create() {
        return view('categorias.create');
    }
    public function store(CategoriaRequest $request) {
        Categoria::create($request->validated());
        return redirect()->route('categorias.index')->with('success', 'Categoria cadastrada!');
    }
    public function edit(Categoria $categoria) {
        return view('categorias.edit', compact('categoria'));
    }
    public function update(CategoriaRequest $request, Categoria $categoria) {
        $categoria->update($request->validated());
        return redirect()->route('categorias.index')->with('success', 'Categoria atualizada!');
    }
    public function destroy(Categoria $categoria) {
        $categoria->delete();
        return redirect()->route('categorias.index')->with('success', 'Categoria removida!');
    }
}
