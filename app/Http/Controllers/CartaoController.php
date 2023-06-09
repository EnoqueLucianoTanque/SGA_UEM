<?php

namespace App\Http\Controllers;

use App\Models\Cartao;
use Illuminate\Http\Request;

class CartaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("cartao.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("cartao.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cartao=new Cartao;
        $cartao->saldo=$request->saldo;
        $cartao->utente_id=$request->utente_id;
        $cartao->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cartao  $cartao
     * @return \Illuminate\Http\Response
     */
    public function show(Cartao $cartao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cartao  $cartao
     * @return \Illuminate\Http\Response
     */
    public function edit(Cartao $cartao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cartao  $cartao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cartao $cartao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cartao  $cartao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cartao $cartao)
    {
        //
    }
}
