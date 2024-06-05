<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionarios.index', compact('funcionarios'));
    }

    public function create()
    {
        return view('funcionarios.create');
    }

    public function store(Request $request)
    {
        Funcionario::create($request->all());
        return redirect()->route('funcionarios.index');
    }

    public function edit($id)
    {
        $funcionario = Funcionario::find($id);
        return view('funcionarios.edit', compact('funcionario'));
    }

    public function update(Request $request, $id)
    {
        $funcionario = Funcionario::find($id);
        $funcionario->update($request->all());
        return redirect()->route('funcionarios.index');
    }

    public function destroy($id)
    {
        $funcionario = Funcionario::find($id);
        $funcionario->delete();
        return redirect()->route('funcionarios.index');
    }
}
