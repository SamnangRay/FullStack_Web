<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $courses = Courses::all();
        return $courses;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([ 
            'name' => 'required|string|max:255',
            'code'=> 'required|integer|max:10',
            'credits'=> 'required|integer|max:1',
            'department_id'=> 'string',
         ]);
        $course = Courses::create([
            'name'=> $validated['name'],
            'code'=> $validated['code'],
            'credits'=> $validated['credits'],
            'department_id'=> $validated['department_id'],
        ]);
        return $course;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return Courses::find($id);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code'=> 'required|integer|max:10',
            'credits'=> 'required|integer|max:1',
            'department_id'=> 'string',
        ]);
        $course = Courses::findOrFail($id);
        $course->update($validated);
        return $course;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Courses::findOrFail( $id )->delete();
        return response()->json([
            'message' => 'Teacher deleted successfully',
            'id' => $id,
        ]);
    }
}
