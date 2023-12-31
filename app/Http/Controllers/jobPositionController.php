<?php

namespace App\Http\Controllers;

use App\Models\jobPosition;
use Illuminate\Http\Request;

class jobPositionController extends Controller
{
    //
    public function index()
    {
         $job_positions = jobPosition::all();
        return view('jobPosition.index', compact('job_positions'));
    }

    public function create()
    {
        return view('jobPosition.create');
    }

    public function store(Request $request)
    {
        
        jobPosition::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route('job-position.index');
    }

    public function show($id)
    {
        $jobPosition = jobPosition::findOrFail($id);
        return view('jobPosition.view', compact('jobPosition'));
    }
    
    public function edit($id)
    {
        $jobPosition = jobPosition::findOrFail($id);
        
        return view('jobPosition.edit',compact('jobPosition'));
    }
    
    public function update(Request $request,$id){
        $jobPosition = jobPosition::findOrFail($id);
        $jobPosition->update(
            [
                'name'=>$request->name,
                'description'=>$request->description
            ]
        );
        return redirect()->route('job-position.index');
    }


    public function destroy($id)
    {
        jobPosition::destroy($id);
        return redirect()->route('job-position.index');
    }
}
