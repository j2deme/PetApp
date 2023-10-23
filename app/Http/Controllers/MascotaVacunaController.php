<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\MascotaVacuna;
use App\Models\Vacuna;
use Illuminate\Http\Request;

class MascotaVacunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Mascota $mascota)
    {
        return view('mascotas.vacunas.index', compact('mascota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Mascota $mascota)
    {
        $vacunas = Vacuna::orderBy('nombre')->get();
        return view('mascotas.vacunas.create', compact('mascota', 'vacunas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Mascota $mascota)
    {
        $mascota->vacunas()->attach($request->vacuna_id, ['fecha_aplicacion' => $request->fecha_aplicacion]);
        return redirect(route('mascotas.vacunas.index', ['mascota' => $mascota]));
    }

    /**
     * Display the specified resource.
     */
    public function show(MascotaVacuna $mascotaVacuna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MascotaVacuna $mascotaVacuna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MascotaVacuna $mascotaVacuna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mascota $mascota, Vacuna $vacuna)
    {
        $mascota->vacunas()->detach($vacuna);
        return redirect(route('mascotas.vacunas.index', ['mascota' => $mascota]));
    }
}
