<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function fetch()
    {
        // Retrieve student details from session
        $studentName = Session::get('student_name');
        $semester = Session::get('semester');

        // Pass student name to the view
        return redirect()->route('student-feedback-form')->with([
            'studentName' => $studentName,
            'semester' => $semester,
        ]);
    }
}
