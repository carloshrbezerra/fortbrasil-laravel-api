<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Permissao;
use App\Http\Resources\PermissaoResource;

class PermissaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissoes = Permissao::paginate(5);

        return PermissaoResource::collection($permissoes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permissao = new Permissao($request->all());
        $permissao->save();

        return new PermissaoResource($permissao);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Permissao $permissao)
    {
        return new PermissaoResource($permissao);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permissao $permissao)
    {
        $request->validate(array(
            'tipo_operacao' => 'required'
        ));
        $permissao->fill($request->all());
        $permissao->save();

        return new PermissaoResource($permissao);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permissao $permissao)
    {
        $permissao->delete();

        return new PermissaoResource($permissao);
    }
}
