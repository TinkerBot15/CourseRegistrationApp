<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Department;
use App\Models\Faculty;

class RegistrationController extends Controller
{
    public function showSignupForm()
    {
        $departments = Department::all();
        $faculties = Faculty::all();

        return view('auth.signup', compact('departments', 'faculties'));
    }

    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:students',
            'password' => 'required|string|min:6|confirmed',
            'matric_number' => 'required|string|unique:students',
            'department_id' => 'required|exists:departments,id',
            'faculty_id' => 'required|exists:faculties,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new student
        $student = new Student();
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->email = $request->input('email');
        $student->password = Hash::make($request->input('password'));
        $student->matric_number = $request->input('matric_number');
        $student->department_id = $request->input('department_id');
        $student->faculty_id = $request->input('faculty_id');
        $student->save();

        // Redirect to login page or dashboard
        return redirect()->route('login')->with('success', 'Registration successful. You can now log in.');
    }

}
