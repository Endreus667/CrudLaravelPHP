<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiterController extends Controller
{
    public function index() {

        return view("bemvindo");
    }


}
