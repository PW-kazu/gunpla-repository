<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Display;

class DisplayController extends Controller
{
    public function index(Request $request)
    {
        $books = Display::with('display')->get();
        return view('display.index', ['displays'=>$displays]);
    }

    public function add(Request $request)
    {
        return view('display.add');
    }

    public function create(Request $request)
    {
        $form = $request->all();
        Display::create($form);
        return redirect('/display');
    }
}
