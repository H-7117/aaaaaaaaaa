<?php

namespace App\Http\Controllers;

use App\Models\commentts;
use App\Http\Requests\StorecommenttsRequest;
use App\Http\Requests\UpdatecommenttsRequest;

class CommenttsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $comments = commentts::all();
        return view('comments.index',compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecommenttsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(commentts $commentts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(commentts $commentts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecommenttsRequest $request, commentts $commentts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(commentts $commentts)
    {
        //
    }
}
