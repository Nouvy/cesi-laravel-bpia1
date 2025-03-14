<?php

namespace App\Http\Controllers;

use App\Models\Capteur;
use App\Models\HistoriqueTemperature;
use Illuminate\Http\Request;

class HistoriqueTemperatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $historiqueTemperatures = HistoriqueTemperature::all();
        return view('dashboard.temperature.index',  compact('historiqueTemperatures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $capteurs = Capteur::all();
        return view('dashboard.temperature.new', compact('capteurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'temperature' => 'required|numeric',
            'capteur_id'  => 'required|exists:capteurs,id'
        ]);

        HistoriqueTemperature::create($request->all());

        return redirect()->route('historique_temperatures.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HistoriqueTemperature $historiqueTemperature)
    {
        $capteurs = Capteur::all();
        return view('dashboard.temperature.edit',  compact('historiqueTemperature', 'capteurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HistoriqueTemperature $historiqueTemperature)
    {
        $request->validate([
            'temperature' => 'required|numeric',
            'capteur_id'  => 'required|exists:capteurs,id'
        ]);

        $historiqueTemperature->update($request->all());

        return redirect()->route('historique_temperatures.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
