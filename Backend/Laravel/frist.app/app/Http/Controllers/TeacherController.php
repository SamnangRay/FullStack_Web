<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $teachers = Teachers::all();
        return $teachers;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
                    'name' => 'required|string|max:255',
                    'email' => 'required|email|unique:users,email',
                    'phone' => 'required|integer',
                    'gender'=> 'rquired|string|max:6',
                    'dob'=> 'required|string|max:10',
                    'origin'=> 'required|string',
                    'department_id'=> 'string',
                ]);
    $teacher=Teachers::create([
        'name'=> $validated['name'],
        'email'=> $validated['email'],
        'phone'=> $validated['phone'],
        'gender'=> $validated['gender'],
        'dob'=> $validated['dob'],
        'origin'=> $validated['origin'],
        'department_id'=> $validated['department_id'],
    ]);
                return $teacher;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $teacher = Teachers::find($id);
        return $teacher;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validate = $request->validate([
                    'name' => 'required|string|max:255',
                    'email' => 'required|email|unique:users,email',
                    'phone' => 'required|integer',
                    'gender'=> 'rquired|string|max:6',
                    'dob'=> 'required|string|max:10',
                    'origin'=> 'required|string',
                    'department_id'=> 'string',
        ]);
        $teacher = Teachers::findOrFail($id);
        $teacher->update($validate);
        return $teacher;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Teachers::findOrFail( $id )->delete();
        return response()->json([
            'message' => 'Teacher deleted successfully',
            'id' => $id]);
    }
}
