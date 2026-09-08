<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $student = Students:: all();
        return $student;
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
    $student=Students::create([
        'name'=> $validated['name'],
        'email'=> $validated['email'],
        'phone'=> $validated['phone'],
        'gender'=> $validated['gender'],
        'dob'=> $validated['dob'],
        'origin'=> $validated['origin'],
        'department_id'=> $validated['department_id'],
    ]);
                return $student;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
                
                return Students::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
        $student = Students::findOrFail($id);
        $student->update($validated);
                return $student;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
            Students::findOrFail($id)->delete();

                return response()->json([
                    'message' => 'Student deleted successfully',
                    'id' => $id]);
    }
}
