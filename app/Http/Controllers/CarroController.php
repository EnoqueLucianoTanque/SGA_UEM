<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index()
    {
     
    }

    public function create()
    {
       
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        Carro::create($request->all());

        return redirect()->route('products.index')
         ->with('success', 'Product created successfully.');
    }

    public function show(Carro $carro)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Carro $carro)
    {
        
    }

    public function update(Request $request, Carro $carro)
    {
        
    }

    public function destroy(Carro $carro)
    {
       
    }
}
