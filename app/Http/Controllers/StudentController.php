<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $name;
    protected $city;
    protected $students;



    public function index(){
//        $this->name = "BITM";
//        $this->city = "Dhaka";


        //Data Share array
//        return view('all', ['data' => $this->name]);

        //Data Share - with
//        return view('all')->with(
//            [
//                'data' => $this->name,
//                'sak' => $this->city
//            ]
//        );




        // Data Share - Compact
//        $data = 'BITM';
//        $rafa = 'dhaka';
//
//        return view('all', compact('data', 'rafa'));

//        return view('all', [
//            'data' => $this->name,
//            'sak' => $this->city
//        ]);

//        $this->students = Student::getAllStudent();
//        return view('all', ['students' => $this->students]);
        $this->student = new Student();
        $this->student->newStudent();
        return 'SUCCESS';




    }







}
