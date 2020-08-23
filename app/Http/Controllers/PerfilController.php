<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;

use App\Http\Resources\Perfil as PerfilResource;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $size = $request->query('size', 10);
        $perfis = Perfil::paginate($size);

        return PerfilResource::collection($perfis);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(array(
            'nome' => 'required'
        ));
        $perfil = new Perfil($request->all());
        $perfil->save();
        return $perfil;

        //return new PerfilResource($perfil);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AppModelsPerfil  $appModelsPerfil
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        return new PerfilResource($perfil);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AppModelsPerfil  $appModelsPerfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfil $perfil)
    {
        $request->validate(array(
            'nome' => 'required'
        ));
        $perfil->fill($request->all());
        $perfil->save();

        return new PerfilResource($perfil);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AppModelsPerfil  $appModelsPerfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfil)
    {
        $perfil->delete();

        return new PerfilResource($perfil);
    }

    public function todos(){
        return Perfil::get();
    }
}
