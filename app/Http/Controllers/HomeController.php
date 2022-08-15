<?php

namespace App\Http\Controllers;

use App\Models\Cadastros;
use App\Models\Cartoes;
use App\Models\Vagas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $vagas = Vagas::orderBy('id_vaga','asc')->where('cheia','=',0)->get();
        $cont = $vagas->count();
        $cartoes = Cartoes::orderBy('id_cartao','asc')->get();
        $contCartoes = $cartoes->count();
        $cadastros = Cadastros::orderBy('id_cadastro','asc')->get();
        $contCadastros = $cadastros->count();
        $saldo = $this->calculaSaldo($cadastros);

        return view('home.index',compact('vagas','cont','contCartoes','contCadastros','saldo'));
    }

    public function calculaSaldo($cadastros){
        $saldo = 0;
            foreach ($cadastros as $cadastro){
                $saldo += $cadastro->saldo;
            }
        return $saldo;
    }
}
