<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    private $name = "Muhammad Fikri Hidayat";

    public function index() {
        return $this->name;
    }

    public function show($param) {
        $this->name = $param;
        return $this->name;
    }
}