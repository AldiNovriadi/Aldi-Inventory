<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $code = "190313013";
    private $name = "Aldi Novriadi";
    private $course, $task, $quiz, $mid_term, $final, $grade;

    public function myCourse($course, $task, $quiz, $mid_term, $final)
    {
        $this->course = $course;
        $this->task = $task;
        $this->quiz = $quiz;
        $this->mid_term = $mid_term;
        $this->final = $final;
        $this->grade = $this->calculateGrade();
        return view("student/my_view", ['code' => $this->code, 'name' => $this->name, 'course' => $this->course]);
    }

    private function calculateGrade()
    {
        $nilaiAkhir = ($this->task * 0.1) + ($this->quiz * 0.1) + ($this->mid_term * 0.3) + ($this->final * 0.5);
        return $nilaiAkhir;
    }
}
