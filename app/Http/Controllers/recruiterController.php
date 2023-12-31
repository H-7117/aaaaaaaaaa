<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;
use App\Models\recruiter;
class recruiterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $recruiter = recruiter::all();
        return view('recruiter.index',compact('recruiter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $company = company::all();
        return view('recruiter.create',compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        recruiter::create([
            'companies_id'=>$request->companies_id,
            'name'=>$request->name,
            'role'=>$request->role
        ]);

        return redirect()->route('recruiter.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $recruiter = recruiter::findOrFail($id);
        return view('recruiter.view', compact('recruiter'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $recruiter = recruiter::findOrFail($id);
        $company = company::all();
        return view('recruiter.edit',compact('recruiter','company'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // print('aaaaaaaaaaaa');
        $recruiter = recruiter::findOrFail($id);
        $recruiter->update($request->all());
        return redirect()->route('recruiter.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        recruiter::destroy($id);
        return redirect()->route('recruiter.index');
    }
}
