<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeraturanRequest;
use App\Http\Requests\UpdatePeraturanRequest;
use App\Models\Peraturan;

class PeraturanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peraturans = Peraturan::all();
        return view('backend.Peraturan.index', compact('peraturans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.peraturan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePeraturanRequest $request)
    {
        Peraturan::create($request->validated());
        return redirect(route('peraturans.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Peraturan $peraturan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peraturan $peraturan)
    {
        return view('backend.peraturan.edit', compact('peraturan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePeraturanRequest $request, Peraturan $peraturan)
    {
        $peraturan->update($request->validated());
        return redirect(route('peraturans.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peraturan $peraturan)
    {
        $peraturan->delete();
        return redirect(route('peraturans.index'));
    }
}
