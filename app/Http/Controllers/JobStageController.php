<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jobStage;
use App\Models\job;
use Illuminate\Support\Facades\DB;

class JobStageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jobStages = jobStage::all();
        return view('jobStage.index', compact('jobStages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $job = job::all();
        return view('jobStage.create',compact('job'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // print('aaaaaaa');
        
        jobStage::create([
            'jobs_id' => $request->jobs_id,
            'name' => $request->name,
            'round' => $request->round
        ]);

        return redirect()->route('jobStage.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $jobsss = DB::table('jobs')
        ->join('job_stages','jobs.id','=','job_stages.jobs_id')
        ->where('job_stages.id', $id)
        ->select('jobs.title')
        ->first();

        try {
            $jobStages = jobStage::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        }
        return view('jobStage.view', compact('jobStages','jobsss'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $jobStages = jobStage::findOrFail($id);
        $job = job::all();
        return view('jobStage.edit',compact('jobStages','job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //


        $jobStages = jobStage::findOrFail($id);
        $jobStages->update($request->all());
        return redirect()->route('jobStage.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        jobStage::destroy($id);
        return redirect()->route('jobStage.index');
    }
}
