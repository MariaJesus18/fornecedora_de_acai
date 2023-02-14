<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use App\Http\Requests\StoreGaleriaRequest;
use App\Http\Requests\UpdateGaleriaRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galerias = Galeria::all();
        
        return view ('visibility.galeria', [
            'galeria'=>$galerias,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('visibility.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGaleriaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGaleriaRequest $request)
    {
    //   if($request->hasFile('imagem') && $request->file('imagem')->isValid()){
    //     $requestImagem = $request->imagem;
    //     $extension = $requestImagem->extension();
    //     $imageName = md5($requestImagem->getClientOriginalName() );
    //     $request->imagem->move(public_path('storage/app/Galeria'), $imageName);
    //     $galeria->imagem = $imageName;
    //   }
    //     $galeria->save();



        $extension = $request->file('imagem')->getClientOriginalExtension();
        $filename = date('Ymd') . Str::random(12) . Str::random(12) . '.' . $extension;
        $file = $request->file('imagem')->storeAs('galeria', $filename);
        
        $galeria = new Galeria();
        $galeria->imagem = $filename;
        $galeria->save();

        // if ( !$galeria ) {
        //     return redirect()
        //                 ->back()
        //                 ->with('error', 'Falha ao fazer o salvamento')
        //                 ->withInput();
    

    return redirect(route('galeria'))->with('msg', 'Sucesso');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function show(Galeria $galeria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeria $galeria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGaleriaRequest  $request
     * @param  \App\Models\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGaleriaRequest $request, Galeria $galeria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeria $galeria)
    {
    //     $extension = $request->file('imagem')->getClientOriginalExtension();
    //     $filename = date('Ymd') . Str::random(12) . Str::random(12) . '.' . $extension;
    //     $file = $request->file('imagem')->storeAs('galeria', $filename);
    //     $galeria->update([
    //         ['imagem' => $filename],
    //     ]);
    //     $galeria->imagem = $filename;
    
    //     $galeria->save();

    //     if ( !$galeria ) {
    //         return redirect()
    //                     ->back()
    //                     ->with('error', 'Falha ao fazer o salvamento')
    //                     ->withInput();
    // }  

    }
}
