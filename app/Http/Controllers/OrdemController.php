<?php

namespace App\Http\Controllers;

use App\Models\Ordem;
use Illuminate\Http\Request;

class OrdemController extends Controller
{
    public function index($id)
    {
        $ordem = Ordem::where('id', $id)->first();
        dd($ordem);

        return view('welcome');
    }
}
