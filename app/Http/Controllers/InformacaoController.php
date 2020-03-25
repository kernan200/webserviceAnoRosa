<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Informacao;

class InformacaoController extends Controller
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
        $informacao = Informacao::all();
        return response()->json(['data'=>$informacao, 'status'=>true]);
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
        $informacao = Informacao::create($dados);
        if($informacao){
            return response()->json(['data'=>$informacao, 'status'=>true]);
        }else{
            return response()->json(['data'=>'Erro ao criar o informacao', 'status'=>false]);
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
        $informacao = Informacao::find($id);
        if($informacao){
            return response()->json(['data'=>$informacao, 'status'=>true]);
        }else{
            return response()->json(['data'=>'informacao não cadastrado', 'status'=>false]);
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
        $informacao = Informacao::find($id);
        $dados = $request->all();
        if($informacao){
            $informacao->update($dados);
         return response()->json(['data'=>$informacao, 'status'=>true]);
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
        $informacao = Informacao::find($id);        
        if($informacao){
            $informacao->delete();
             return response()->json(['data'=>'informacao removida com sucesso!', 'status'=>true]);
         }else{
             return response()->json(['data'=>'Erro ao remover o infomacao', 'status'=>false]);
        }
    }
}
