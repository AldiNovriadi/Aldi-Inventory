<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    // Membuat atribute Name
    private $code = "190313013";
    private $name = "Aldi Novriadi";

    // Membuat Method Index
    public function index()
    {
        return view("person.index");
    }

    // Merubah attribute name
    public function show($param)
    {
        $this->name = $param;
        return $this->name;
    }


    // CONTROLLER - VIEW
    public function sendData()
    {
        $code = $this->code;
        $name = $this->name;

        return view("person.sendData", compact('code', 'name'));
    }

    // Method menggambil Form
    public function add()
    {
        return view('person.add');
    }

    //Method Inputan Form
    public function addProcess(Request $request)
    {
        $this->validate($request, [
            'person_name' => 'required|max:30',
            'person_email' => 'required|email'
        ]);

        return view('person.show', ['data' => $request]);
    }
}
