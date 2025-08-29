<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(course $course)
    {
        return view('Course.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(course $course)
    {
        return view ('course.create');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
         $validated = $request->validate([
            'name' => 'required|string|max:255',
            'syllabus' => 'required|string|unique:students',
            'duration' => 'required|string',
        ]);

        Course::create($validated);

        return redirect()->route('course.index')->with('success', 'Course created successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id); //find the student
        $course->delete(); //delete student

    }
}
