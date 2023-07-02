<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Tutor::factory(10)->create();
        $tutores = Tutor::orderBy('nome', 'asc')
        ->paginate(10);
        return view('tutor.index', ['tutores' => $tutores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tutor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email:rfc,dns|max:50|unique:tutors',
            'endereco' => 'string|max:255|nullable',
            'telefone' => 'numeric|min_digits:10|max_digits:11',
        ]);

        Tutor::create($validatedData);

        return redirect()->route('tutor.index')
            ->with('success', 'Tutor criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tutor = Tutor::findOrFail($id);
        return view('tutor.show', compact('tutor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tutor = Tutor::findOrFail($id);
        return view('tutor.edit', compact('tutor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email:rfc,dns|max:50|unique:tutors,email,'.$id,
            'endereco' => 'string|max:255|nullable',
            'telefone' => 'numeric|min_digits:10|max_digits:11',
        ]);

        Tutor::whereId($id)->update($validatedData);

        return redirect()->route('tutor.index')
            ->with('success', 'Tutor atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tutor = Tutor::findOrFail($id);
        $tutor->delete();

        return redirect()->route('tutor.index')
            ->with('success', 'Tutor deletado com sucesso.');
    }
}
