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
        // Cao::factory(10)->create();
        $caes = Cao::paginate(10);
        return view('cao.index', ['caes' => $caes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $caosM = Cao::where('sexo', 'M')->paginate(10);
        $caosF = Cao::where('sexo', 'F')->paginate(10);
        return view('cao.create', compact('caosM', 'caosF'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'nome' => 'required|string|max:255',
            'raca' => 'required|string|max:50',
            'cor' => 'required|string|max:20',
            'porte' => 'required|string|max:20',
            'data_nascimento' => 'required|date_format:d/m/Y|before_or_equal:now',
            'sexo' => 'string|max:1',
        ];

        if (!empty($request->pai_id)) {
            $rules['pai_id'] = 'exists:caos,id';
        }

        if (!empty($request->mae_id)) {
            $rules['mae_id'] = 'exists:caos,id';
        }

        $validatedData = $request->validate($rules);

        $validatedData['data_nascimento'] = Carbon::createFromFormat('d/m/Y', $validatedData['data_nascimento'])->format('Y-m-d');

        Cao::create($validatedData);

        return redirect()->route('cao.index')
            ->with('success', 'Cão criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cao = Cao::findOrFail($id);
        $caoMae = $cao->mae()->first();
        $caoPai = $cao->pai()->first();

        $eventos = $cao->eventos()->get();
        return view('cao.show', compact('cao', 'caoMae', 'caoPai', 'eventos'));
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
        $rules = [
            'nome' => 'required|string|max:255',
            'raca' => 'required|string|max:50',
            'cor' => 'required|string|max:20',
            'porte' => 'required|string|max:20',
            'data_nascimento' => 'required|date_format:d/m/Y|before_or_equal:now',
            'sexo' => 'string|max:1',
        ];

        if (!empty($request->pai_id)) {
            $rules['pai_id'] = 'exists:caos,id';
        }

        if (!empty($request->mae_id)) {
            $rules['mae_id'] = 'exists:caos,id';
        }

        $validatedData = $request->validate($rules);

        $validatedData['data_nascimento'] = Carbon::createFromFormat('d/m/Y', $validatedData['data_nascimento'])->format('Y-m-d');

        Cao::whereId($id)->update($validatedData);

        return redirect()->route('cao.index')
            ->with('success', 'Cão atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cao = Cao::findOrFail($id);
        $cao->delete();

        return redirect()->route('cao.index')
            ->with('success', 'Cão deletado com sucesso.');
    }
}
