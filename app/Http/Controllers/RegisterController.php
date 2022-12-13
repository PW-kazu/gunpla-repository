<?php

namespace App\Http\Controllers;

use app\Models\Modeler;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
   public function __construct()
    {
        $this->register = new Register();
    } 


    public function index()
    {
        $register = $this->register->findAllRegisters();

        return view('register', compact('registers'));
    }

    public function create(Request $request)
    {        
        return view('register');
    }

    public function store(Request $request)
    {
        $registerBook = $this->register->InsertRegister($request);
        return redirect()->route('modeller.register');
    }

    

   
}
