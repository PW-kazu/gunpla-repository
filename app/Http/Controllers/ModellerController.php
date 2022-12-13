<?php

namespace App\Http\Controllers;

use app\Models\Modeler;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;


class ModellerController extends Controller
{
    public function index() {
        $modellers = Modeller::all();
        return view('index',['modellers' => $modellers]);
    }

    public function post(Request $request)
    {
        
    }
}
