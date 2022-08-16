<?php

namespace App\Http\Controllers;

use App\Models\Cadastros;
use App\Models\Cartoes;
use App\Models\Vagas;
use Carbon\CarbonTimeZone;
use Faker\Core\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Spatie\Ignition\Tests\TestClasses\Models\Car;

class CartoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartoes = Cartoes::with('cadastro')->paginate(10);
        return view('cartoes.index',compact('cartoes'));
    }

    public function create(Request $request,$id){
        $cartao = new Cartoes();
        $cadastro = Cadastros::where('id_cadastro',$id)->first();
        $vagas = Vagas::get()->all();
        return view('cartoes.create',compact('cartao','cadastro','vagas'));
    }

    /**
     * Show the form for creating a new resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function criar(Request $request,$id)
    {
        $cartao = new Cartoes();
        $cadastro = Cadastros::where('id_cadastro',$id)->first();
        $vagas = Vagas::get()->all();

        return view('cartoes.create',compact('cartao','cadastro','vagas'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $vaga = Vagas::where('id_vaga',$request->vaga)->first();
        $vaga->update(['cheia' => 1]);
        $cartao = Cartoes::create($request->all());


        return redirect()->route('cartoes.index')->with('alert-sucess','Cartão criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $cartao = Cartoes::findOrFail($id);
        return view('cartoes.show',compact('cartao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cartao = Cartoes::findOrFail($id);
        return view('cartoes.edit',compact('cartao'));
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
        $cartao = Cartoes::findOrFail($id);
        $cartao->update($request->all());
        return redirect()->route('cartoes.index')->with('alert-sucess','Cartão atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cartao = Cartoes::findOrFail($id);
        $date1 = new Carbon($cartao->hora_entrada);
        $date2 = Carbon::now()->setTimezone('-3:00');
        $value = $date2->floatDiffInRealMinutes($date1);
        $cartao->update(['saldo_cartao'=>$value/60]);
        $vaga = Vagas::where('id_vaga',$cartao->vaga)->first();
        $vaga->update(['cheia' => 0]);
        $cadastro = Cadastros::where('id_cadastro',$cartao->id_cadastro)->first();
        $cadastro->update(['saldo'=>$cadastro->saldo+$value/60]);
        $cartao->delete();
        return redirect()->route('cartoes.index')->with('alert-success','Cartão excluído com sucesso');
    }
}
