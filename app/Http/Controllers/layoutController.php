<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layoutController extends Controller
{
    //
    public function create() {
        return view('users.form');
    }
    public function list() {
        return view('users.list');
    }
    public function home() {
        return view('layout.master-layout');
    }
}
