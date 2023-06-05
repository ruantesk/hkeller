<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Carbon\Carbon;


class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Evento::factory(10)->create();
        $eventos = Evento::paginate(10);
        return view('evento.index', ['eventos' => $eventos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('evento.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'cao_id' => 'required|exists:caos,id',
            'data_evento' => 'required|date_format:d/m/Y|before_or_equal:now',
            'descricao' => 'required|string|max:255',
        ]);

        $validatedData['data_evento'] = Carbon::createFromFormat('d/m/Y', $validatedData['data_evento'])->format('Y-m-d');

        Evento::create($validatedData);

        return back()->with('success', 'Evento criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $evento = Evento::findOrFail($id);
        return view('evento.show', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $evento = Evento::findOrFail($id);
        return view('evento.edit', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'data_evento' => 'required|date_format:d/m/Y|before_or_equal:now',
            'descricao' => 'required|string|max:255',
        ]);

        $validatedData['data_evento'] = Carbon::createFromFormat('d/m/Y', $validatedData['data_evento'])->format('Y-m-d');

        Evento::whereId($id)->update($validatedData);

        return back()->with('success', 'Evento atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $evento = Evento::findOrFail($id);
        $evento->delete();

        return back()->with('success', 'Evento deletado com sucesso.');
    }
}
