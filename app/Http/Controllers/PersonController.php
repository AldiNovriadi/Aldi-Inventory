<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    // Membuat atribute Name
    private $name = "Aldi Novriadi";

    // Membuat Method Index
    public function index() {
        // Mengembalikan nilai attribute name
        return $this->name;
    }
}
