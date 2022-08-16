@extends('layouts.master')
@section('content')
    <div class="container-fluid justify-content-center align-items-md-center">
        <div class="row">
            <h1 class="text-center">Bem vindo</h1>
        </div>
        <div class="row" style="margin-top: 20px;margin-left: 3vw">
            <div class="card mb-3 border-dark justify-content-center" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('/imagens/estacionamento.png')}}" class="img-fluid rounded-start" alt="estacionamento">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body text-center">
                            <h2 class="card-title">Vagas disponíveis: {{$cont}}</h2>
                            <h4>Quantidade de vagas disponíveis no momento.</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3 border-dark justify-content-center" style="max-width: 540px;margin-left: 50px">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('/imagens/cartoes.png')}}" class="img-fluid rounded-start" alt="estacionamento">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body text-center">
                            <h2 class="card-title">Cartões ativos: {{$contCartoes}}</h2>
                            <h4>Quantidade de cartões ativos no momento.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 50px;margin-left: 3vw">
            <div class="card mb-3 border-dark justify-content-center" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('/imagens/cad.png')}}" class="img-fluid rounded-start" alt="estacionamento">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body text-center">
                            <h2 class="card-title">Cadastros ativos: {{$contCadastros}}</h2>
                            <h4>Quantidade de cadastros ativos no momento.</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3 border-dark justify-content-center" style="max-width: 540px;margin-left: 50px">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('/imagens/dinheiro.png')}}" class="img-fluid rounded-start" alt="estacionamento">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body text-center">
                            <h2 class="card-title">Saldo total: {{number_format($saldo, 2)}}</h2>
                            <h4>Valor total de todos os cadastros ativos.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
