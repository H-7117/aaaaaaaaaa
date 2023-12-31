<?php

namespace App\Http\Controllers;
use App\Models\company;
use Illuminate\Http\Request;

class companyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $companies = Company::all();
        return view('company.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Company::create([
            'name'=>$request->name,
            'about_company'=>$request->about_company
        ]);
        return redirect()->route('company.index');

        // return redirect()->route('company.index')->with('success','Company Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $companies = company::findOrFail($id);
        return view('company.view', compact('companies'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $companies = company::findOrFail($id);
        return view('company.edit',compact('companies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $companies = company::findOrFail($id);
        $companies->update(
            [
                'name'=>$request->name,
                'about_company'=>$request->about_company
            ]
        );
        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        company::destroy($id);
        return redirect()->route('company.index');
    }
}
