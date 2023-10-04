<?php

namespace App\Http\Controllers;

use App\Models\Ordem;
use Illuminate\Http\Request;

class OrdemController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
