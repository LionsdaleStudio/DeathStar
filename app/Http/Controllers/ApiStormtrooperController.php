<?php

namespace App\Http\Controllers;

use App\Models\Stormtrooper;
use Illuminate\Http\Request;

class ApiStormtrooperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stormtroopers = Stormtrooper::all();
        return response()->json($stormtroopers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Stormtrooper $stormtrooper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stormtrooper $stormtrooper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stormtrooper $stormtrooper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stormtrooper $stormtrooper)
    {
        //
    }
}
