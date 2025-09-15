<?php
namespace App\Http\Controllers;

use App\Models\FormaPagamento;
use App\Http\Requests\FormaPagamentoRequest;
use Illuminate\Http\Request;

class FormaPagamentoController extends Controller
{
    public function index() {
        $formas = FormaPagamento::paginate(10);
        return view('forma-pagamentos.index', compact('formas'));
    }
    public function create() {
        return view('forma-pagamentos.create');
    }
    public function store(FormaPagamentoRequest $request) {
        FormaPagamento::create($request->validated());
        return redirect()->route('forma-pagamentos.index')->with('success', 'Forma de pagamento cadastrada!');
    }
    public function edit(FormaPagamento $formaPagamento) {
        return view('forma-pagamentos.edit', compact('formaPagamento'));
    }
    public function update(FormaPagamentoRequest $request, FormaPagamento $formaPagamento) {
        $formaPagamento->update($request->validated());
        return redirect()->route('forma-pagamentos.index')->with('success', 'Forma de pagamento atualizada!');
    }
    public function destroy(FormaPagamento $formaPagamento) {
        $formaPagamento->delete();
        return redirect()->route('forma-pagamentos.index')->with('success', 'Forma de pagamento removida!');
    }
}
