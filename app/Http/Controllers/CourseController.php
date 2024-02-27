<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'banner_url' => 'required|url',
            'student_count' => 'required|integer',
        ]);

        $course = Course::create($request->all());

        return response()->json($course, 201);
    }

    public function index()
    {
        $courses = Course::all();

        return response()->json($courses, 200);
    }
}
