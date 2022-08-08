@extends('layouts.master')
@section('content')
    <div class="" >
        <h1 style="text-align: center">Gerenciamento de cartão</h1>
        <div class="row justify-content-center" >
            <div class="col-md-4 ">
                <input type="text" name="saldo" value="{{$cartao->id_cartao->saldo ?? ''}}" class="form-control" placeholder="Saldo" aria-label="saldo">
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top: 20px">
             <div class="col-md-4">
                  <input type="text" name="hora_entrada" value="{{$cartao->hora_entrada ?? ''}}" class="form-control" placeholder="Hora de entrada" aria-label="hora_entrada">
             </div>
        </div>
    </div>
@endsection
