<?php

namespace App\Http\Controllers;

use App\Models\Stormtrooper;
use App\Http\Requests\StoreStormtrooperRequest;
use App\Http\Requests\UpdateStormtrooperRequest;

class StormtrooperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stormtroopers = Stormtrooper::all();
        return view('stormtroopers.index', ['stormtroopers' => $stormtroopers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stormtroopers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStormtrooperRequest $request)
    {
/*         dd($request);
 */        Stormtrooper::create($request->all());

       /*  $trooper = new Stormtrooper([
            "name" => $request->rohamnev,
            "isActive" => $request->isActive,
        ]);

        $trooper->save(); */
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
    public function update(UpdateStormtrooperRequest $request, Stormtrooper $stormtrooper)
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
