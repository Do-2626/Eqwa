<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function abute()
    {
        return view('abute');
        // return '<h1>abute</h1>';
    }
    public function computers()
    {
        return view('computers');
    }
}