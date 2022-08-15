<?php

namespace App\Http\Controllers;

use App\Models\Cadastros;
use App\Models\Cartoes;
use Illuminate\Http\Request;

class CadastrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadastros = Cadastros::with(['cartao'])->paginate(10);
        return view('cadastros.index',compact('cadastros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cadastro = new Cadastros();
        return view('cadastros.create',compact('cadastro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cadastro = Cadastros::create($request->all());
        return redirect()->route('cadastros.index')->with('alert-sucess','Usuario cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cadastros $cadastro)
    {
        return view('cadastros.show',compact('cadastro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cadastro = Cadastros::findOrFail($id);
        return view('cadastros.edit',compact('cadastro'));
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
        $cadastro = Cadastros::findOrFail($id);
        $cadastro->update($request->all());
        return redirect()->route('cadastros.index')->with('alert-sucess','Cadastro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cadastro = Cadastros::findOrFail($id);
        $cadastro->delete();
        return redirect()->route('cadastros.index')->with('alert-success','Cadastro excluído com sucesso');
    }
}
