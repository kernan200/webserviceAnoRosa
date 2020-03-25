<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Medico;

class MedicoController extends Controller
{
    public function __construct(){
        header('Access-Control-Allow-Origin: *');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medico = medico::all();
        return response()->json(['data'=>$medico, 'status'=>true]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        $medico = Medico::create($dados);
        if($medico){
            return response()->json(['data'=>$medico, 'status'=>true]);
        }else{
            return response()->json(['data'=>'Erro ao criar o medico', 'status'=>false]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medico = Medico::find($id);
        if($medico){
            return response()->json(['data'=>$medico, 'status'=>true]);
        }else{
            return response()->json(['data'=>'medico não cadastrado', 'status'=>false]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $medico = Medico::find($id);
        $dados = $request->all();
        if($medico){
            $medico->update($dados);
         return response()->json(['data'=>$medico, 'status'=>true]);
        }else{
        return response()->json(['data'=>'Erro ao editar o usuário', 'status'=>false]);
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medico = Medico::find($id);        
        if($medico){
            $medico->delete();
             return response()->json(['data'=>'medico removido com sucesso!', 'status'=>true]);
         }else{
             return response()->json(['data'=>'Erro ao remover o medico', 'status'=>false]);
        }
    }
}
