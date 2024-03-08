<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('test');
    }

    public function upload(Request $request)
    {
//        $student = new Student;
//        $student->name = $request->name;
//        $student->save();

        $student = Student::create([
            'name' => $request->name,
        ]);


        return 'success';
    }
}
