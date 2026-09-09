<?php

namespace App\Http\Controllers;

use App\Models\Departments;
use Illuminate\Http\Request;


class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $departments = Departments::all();
        return $departments; 
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
    ]);

    $department= Departments::create([
        'name'=> $validated['name'],
        'description'=> $validated['description'],
    ]);

    return $department;
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        return Departments::find($id);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validated = $request->validate([

                    'name' => 'required|string|max:255',
                    'description' => 'required|string',

        ]);
        
                    $department = Departments::findOrFail($id);
                    $department->update($validated);

            return $department;

    }

    /**
     * Remove the specified reThis is different from Migrationsource from storage.
     */
    public function destroy(string $id)
    {
        //
        Departments::findOrFail($id)->delete();
        return response()->json([ 
            'message' => 'Department deleted successfully',
            'id' => $id ]);
    }
}
