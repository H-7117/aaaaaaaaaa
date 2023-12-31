<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\jobCategory;


class JobCategoryController extends Controller
{
    //
    public function index()
    {
         $job_category = jobCategory::all();
        return view('jobCategory.index', compact('job_category'));
    }

    public function create()
    {
        return view('jobCategory.create');
    }

    public function store(Request $request)
    {
        
        jobCategory::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route('job-category.index');
    }
   
    public function show($id)
    {
        $jobCategory = jobCategory::findOrFail($id);
        return view('jobCategory.view', compact('jobCategory'));
    }

    public function edit($id)
    {
        $jobCategory = jobCategory::findOrFail($id);
        return view('jobCategory.edit',compact('jobCategory'));
    }

    //
    public function update(Request $request,$id){
        $jobCategory = jobCategory::findOrFail($id);
        $jobCategory->update(
            [
                'name'=>$request->name,
                'description'=>$request->description
            ]
        );
        return redirect()->route('job-category.index');
    }
    public function destroy($id)
    {
        jobCategory::destroy($id);
        return redirect()->route('job-category.index');
    }
}
