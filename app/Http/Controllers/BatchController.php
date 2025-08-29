<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batches = Batch::all();
        return view('batch.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('batch.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|unique:students',
            'address' => 'required|string',
        ]);

        Batch::create($validated);

        return redirect()->route('Batch.index')->with('success', 'Batch created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Batch $batch)
    {
        return view('batch.show', compact('batch'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $batch = Batch::findOrFail($id);
        return view('batch.edit', compact('batch'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Batch $batch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $batch = Batch::findOrFail($id); //find the student
        $batch->delete(); //delete student

        return redirect()->route('batch.index')->with('success', 'Batch deleted successfully');
    }
}
