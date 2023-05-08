<?php

namespace App\Http\Controllers;

use App\Models\Cao;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $caes = Cao::paginate(10);
        return view('cao.index', ['caes' => $caes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cao.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'raca' => 'required|string|max:50',
            'cor' => 'required|string|max:20',
            'porte' => 'required|string|max:20',
            'data_nascimento' => 'required|date_format:d/m/Y|before_or_equal:now',
        ]);

        $validatedData['data_nascimento'] = Carbon::createFromFormat('d/m/Y', $validatedData['data_nascimento'])->format('Y-m-d');

        Cao::create($validatedData);

        return redirect()->route('cao.index')
            ->with('success', 'Cao criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cao = Cao::findOrFail($id);
        return view('cao.show', compact('cao'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cao = Cao::findOrFail($id);
        return view('cao.edit', compact('cao'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'raca' => 'required|string|max:50',
            'cor' => 'required|string|max:20',
            'porte' => 'required|string|max:20',
            'data_nascimento' => 'required|date_format:d/m/Y|before_or_equal:now',
        ]);

        $validatedData['data_nascimento'] = Carbon::createFromFormat('d/m/Y', $validatedData['data_nascimento'])->format('Y-m-d');

        Cao::whereId($id)->update($validatedData);

        return redirect()->route('cao.index')
            ->with('success', 'Cao atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cao = Cao::findOrFail($id);
        $cao->delete();

        return redirect()->route('cao.index')
            ->with('success', 'Cao deletado com sucesso.');
    }
}
