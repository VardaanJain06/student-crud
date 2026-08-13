<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentApiController extends Controller
{
    public function index()
    {
        return response()->json(Student::all());
    }

   public function store(Request $request)
{
    $validated = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email',
        'mobile' => 'required|string|max:15',
        'city' => 'required|string|max:255',
    ]);

    $student = Student::create($validated);

    return response()->json($student, 201);
}


public function update(Request $request, $id)
{
    $student = Student::findOrFail($id);

    $validated = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email,' . $id,
        'mobile' => 'required|string|max:15',
        'city' => 'required|string|max:255',
    ]);

    $student->update($validated);

    return response()->json($student);
}
    public function destroy($id)
    {
        $student = Student::findOrFail($id);

        $student->delete();

        return response()->json([
            'message' => 'Student deleted successfully'
        ]);
    }
}