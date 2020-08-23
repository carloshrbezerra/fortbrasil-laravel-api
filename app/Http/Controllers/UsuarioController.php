<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Resources\UsuarioResource;
use App\Http\Requests\UsuarioRequest;
use App\Models\DepartamentoRegional;
use App\Models\Representante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Config;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::paginate(10);

        return UsuarioResource::collection($usuarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        try {
            $data['password'] = Hash::make($data['password']);
            $usuario = new Usuario($data);

            if (isset($data['perfil']) && count($data['perfil'])) {
                $usuario->perfis()->sync($data['perfil']);
            }
            $usuario->save();

            return new UsuarioResource($usuario);
        } catch (Exception $exception) {
            return response()->json([
                'error' => $exception->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $usuario = Usuario::with(['perfis'])->findOrFail($id);
        return $usuario;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        $data = $request->all();
        try {
            if ($request->has('password') && $request->get('password')) {
                $data['password'] = Hash::make($data['password']);
            } else {
                unset($data['password']);
            }
            $usuario->fill($data);

            if (isset($data['perfil']) && count($data['perfil'])) {
                $usuario->perfis()->sync($data['perfil']);
            }

            $usuario->save();

            return new UsuarioResource($usuario);
        } catch (Exception $exception) {
            return response()->json([
                'error' => $exception->getMessage()
            ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return new UsuarioResource($usuario);
    }

    public function todos(){
        return Usuario::get();
    }
}
