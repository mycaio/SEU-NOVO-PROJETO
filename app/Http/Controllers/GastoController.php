<?php
namespace App\Http\Controllers;

use App\Models\Gasto;
use App\Models\Categoria;
use App\Models\FormaPagamento;
use App\Http\Requests\GastoRequest;
use Illuminate\Http\Request;

class GastoController extends Controller
{
    public function index() {
        $gastos = Gasto::with(['categoria', 'formaPagamento'])->paginate(10);
        return view('gastos.index', compact('gastos'));
    }
    public function create() {
        $categorias = Categoria::all();
        $formas = FormaPagamento::all();
        return view('gastos.create', compact('categorias', 'formas'));
    }
    public function store(GastoRequest $request) {
        Gasto::create($request->validated());
        return redirect()->route('gastos.index')->with('success', 'Gasto cadastrado!');
    }
    public function show(Gasto $gasto) {
        return view('gastos.show', compact('gasto'));
    }
    public function edit(Gasto $gasto) {
        $categorias = Categoria::all();
        $formas = FormaPagamento::all();
        return view('gastos.edit', compact('gasto', 'categorias', 'formas'));
    }
    public function update(GastoRequest $request, Gasto $gasto) {
        $gasto->update($request->validated());
        return redirect()->route('gastos.index')->with('success', 'Gasto atualizado!');
    }
    public function destroy(Gasto $gasto) {
        $gasto->delete();
        return redirect()->route('gastos.index')->with('success', 'Gasto removido!');
    }
}
