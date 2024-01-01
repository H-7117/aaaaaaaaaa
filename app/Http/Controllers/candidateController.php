<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\candidate;
class candidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $candidate = candidate::all();
        return view('candidate.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("candidate.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        candidate::created($request->all());
        // return response('asdsadasfadf');
        return redirect()->route('candidate.index');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
