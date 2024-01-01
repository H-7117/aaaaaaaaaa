<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\candittt;

class CanditttController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $candidate = candittt::all();
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

    
    public function store(Request $request)
    {
        //
        candittt::create([
            'fullName' => $request->input('fullName')
        ]);
        return response('asdsadasfadf');
    }

    /**
     * Display the specified resource.
     */
    public function show(candittt $candittt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(candittt $candittt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, candittt $candittt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(candittt $candittt)
    {
        //
    }
}
