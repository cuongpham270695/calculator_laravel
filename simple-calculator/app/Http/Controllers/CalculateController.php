<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|
     */
    public function index()
    {
        return view('index');
    }

    public function calculate(Request $request)
    {
        $input = $request->screen;
        $result = eval('return ' . $input . ';');
        return view('index',compact('result'));
    }

    public function resetScreen(Request $request)
    {
        $input1 = $request->reset;
        $reset = eval('return ' . $input1 . ';');
        return view('index',compact('reset'));
    }
}
