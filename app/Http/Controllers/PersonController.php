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
}
