<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enrollments = Enrollment::all();
        return view('enrollment.index', compact('enrollments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('enrollment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'enrollment number' => 'required|string|unique:enrollments',
            'enroll$enrollment_id' => 'required|exists:enroll$enrollments,id',
            'batch_id' => 'required|exists:batches,id',
            'enrollment_date' => 'required|date',
        ]);

        Enrollment::create($validated);

        return redirect()->route('enrollment.index')->with('success', 'Enrollment created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Enrollment $enrollment)
    {
        return view('enrollment.show', compact('enrollment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $enrollment = enrollment::findOrFail($id);
        return view('enrollment.edit', compact('enrollment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name'   => 'required|string|max:255',
            'mobile' => 'required|string|unique:enrollments,mobile,' . $id,
            'address'=> 'required|string',
        ]);

        $enrollment = enrollment::findOrFail($id);
        $enrollment->update($validated);

        return redirect()->route('enrollment.index')->with('success', 'enrollment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enrollment $enrollment)
    {
        $enrollment->delete();
        return redirect()->route('enrollment.index')->with('success', 'Enrollment deleted successfully');
    }
}
