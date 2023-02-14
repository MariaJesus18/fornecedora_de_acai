<?php

namespace App\Http\Controllers;

use App\Models\AcaiCliente;
use App\Http\Requests\StoreAcaiClienteRequest;
use App\Http\Requests\UpdateAcaiClienteRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AcaiClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAcaiClienteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAcaiClienteRequest $request, AcaiCliente $acaiCliente)
    {
        //obter image
        $extension = $request->file('foto_acai')->getClientOriginalExtension();

        $filename = date('Ymd') . Str::random(12) . Str::random(12) . '.' . $extension;
        $file = $request->file('foto_acai')->storeAs('acai', $filename);

        //atualizar os dados
        $acaiCliente->update([
            'imagem' => $filename,
        ]);

        $acaiCliente->imagem = $filename;
        $acaiCliente->save();

        return redirect(route('pedidos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AcaiCliente  $acaiCliente
     * @return \Illuminate\Http\Response
     */
    public function show(AcaiCliente $acaiCliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AcaiCliente  $acaiCliente
     * @return \Illuminate\Http\Response
     */
    public function edit(AcaiCliente $acaiCliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAcaiClienteRequest  $request
     * @param  \App\Models\AcaiCliente  $acaiCliente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAcaiClienteRequest $request, AcaiCliente $acaiCliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AcaiCliente  $acaiCliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcaiCliente $acaiCliente)
    {
        //
    }
}
