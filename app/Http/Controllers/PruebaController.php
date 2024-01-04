<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function index()
    {
        return view('will/index');
    }

    public function create()
    {
        return view('will/create');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        return redirect()->route('will.index');
    }
    
    public function show($id)
    {
        return view('will/show', ['id' => $id]);
    }

    public function edit($id)
    {
        return view('will/edit', ['id' => $id]);
    }

    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        return redirect()->route('will.index');
    }

    public function destroy($id)
    {
        return redirect()->route('will.index');
    }
    
}
