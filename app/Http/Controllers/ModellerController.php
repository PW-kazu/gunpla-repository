<?php

namespace App\Http\Controllers;

use app\Models\Modeler;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Http\Requests\ModellerRequest;



class ModellerController extends Controller
{
    public function index() {
        $modellers = Modeller::all();
        return view('index',['modellers' => $modellers]);
    }

    public function post(Request $request)
    {
        
    }

    public function add()
    {
        return view('display');
    }

    public function create(ModellerRequest $request)
    {
        $form = $request->all();
        Modeller::create($form);
        return redirect('/');
    }

    public function delete(Request $request)
    {
        $display = Modeller::find($request->id);
        return view('delete', ['form' => $display]);
    }

    public function remove(Request $request)
    {
        Modeller::find($request->id)->delete();
        return redirect('/');
    }

    public function find()
  {
    return view('find', ['input' => '']);
  }

  public function search(Request $request)
  {
    $author = Modeller::where('name', 'LIKE BINARY',"%{$request->input}%")->first();
    $param = [
      'input' => $request->input,
      'author' => $author
    ];
    return view('find', $param);

}
