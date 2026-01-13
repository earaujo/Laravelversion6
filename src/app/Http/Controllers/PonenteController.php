<?php

namespace App\Http\Controllers;

use App\Models\Ponente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 

class PonenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ponentes = Ponente::all();
        $respuesta= [
            'Ponentes' => $ponentes,
            'status' => 200,
        ];
        return response()->json($respuesta);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ponente $ponente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ponente $ponente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ponente $ponente)
    {
        //
    }
}
