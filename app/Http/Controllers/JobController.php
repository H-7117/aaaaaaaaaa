<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\job;
use App\Models\company;
use App\Models\jobPosition;
use App\Models\jobCategory;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jobs = job::all();
        // $ss=$jobs->company->name;
        $company = company::all();
        $jobPosition = jobPosition::all();
        $jobCategory = jobCategory::all();
        return view('job.index',compact('jobs','company','jobPosition','jobCategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $jobs = job::all();
        $company = company::all();
        $jobPosition = jobPosition::all();
        $jobCategory = jobCategory::all();
        return view('job.create',compact('jobs','company','jobPosition','jobCategory'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        job::create([
            'title' =>$request->title,
            'description' =>$request->description,
            'job_state'=>$request->job_state,
            'companies_id'=>$request->companies_id,
            'job_positions_id'=>$request->job_positions_id,
            'job_categories_id'=>$request->job_categories_id
        ]);

        return redirect()->route('job.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $job = job::findOrFail($id);
        $company = DB::table('jobs')
                    ->join('companies','jobs.companies_id','=','companies.id')
                    ->where('jobs.id',$id)
                    ->select('companies.name')
                    ->get()
                    ->first();
// 
        $job_positions = DB::table('jobs')
                    ->join('job_positions','jobs.job_positions_id','=','job_positions.id')
                    ->where('jobs.id',$id)
                    ->select('job_positions.name')
                    ->get()
                    ->first();
//
$job_category = DB::table('jobs')
                    ->join('job_categories','jobs.job_categories_id','=','job_categories.id')
                    ->where('jobs.id',$id)
                    ->select('job_categories.name')
                    ->get()
                    ->first();
        // $job_positions = DB::select("
        // SELECT jobs.id, job_positions.name 
        // FROM jobs
        // INNER JOIN job_positions ON jobs.job_positions_id=job_positions.id 
        // where job_positions.id=$id;
        // ");

        return view('job.view',compact('job','company','job_positions','job_category'));
        // return $job_positions;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $job = job::findOrFail($id);
        $jobs = job::all();
        $company = company::all();
        $jobPosition = jobPosition::all();
        $jobCategory = jobCategory::all();

        
        return view('job.edit',compact('job','jobs','company','jobPosition','jobCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $job = job::findOrFail($id);
        $job->update($request->all());
        return response('updateddd');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        job::destroy($id);
        return redirect()->route('job.index');
    }
}
