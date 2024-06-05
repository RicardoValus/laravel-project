<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index()
    {
        $professores = Professor::all();
        return view('professores.index', compact('professores'));
    }

    public function create()
    {
        return view('professores.create');
    }

    public function store(Request $request)
    {
        Professor::create($request->all());
        return redirect()->route('professores.index');
    }

    public function edit($id)
    {
        $professor = Professor::find($id);
        return view('professores.edit', compact('professor'));
    }

    public function update(Request $request, $id)
    {
        $professor = Professor::find($id);
        $professor->update($request->all());
        return redirect()->route('professor.index');
    }

    public function destroy($id)
    {
        $professor = Professor::find($id);
        $professor->delete();
        return redirect()->route('professores.index');
    }
}
