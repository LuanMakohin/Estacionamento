@extends('layouts.master')
@section('content')
    <div>
        <div>
            <h1 style="text-align: center">Cartões em uso no momento</h1>
        </div>
        @if($cartoes)
        <div style="margin-top: 20px">
            <table class="table table-dark table-striped" style="text-align: center">
                <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Hora de entrada</th>
                    <th scope="col">Vaga</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cartoes as $cartao)
                <tr>
                        <td class="table-dark"><a style="text-decoration: none; color: white"  href="{{route('cartoes.show',$cartao->id_cartao)}}">{{$cartao->id_cartao ?? ''}}</a></td>
                        <td class="table-dark">{{$cartao->hora_entrada ?? ''}}</td>
                        <td class="table-dark">{{$cartao->vaga ?? ''}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        @else
                <div class=" col-4 align-items-md-center">
                    <div class="alert alert-danger text-md-center align-items-md-center" role="alert">
                        Nenhum cartão cadastrado!
                    </div>
                </div>
        @endif

        <div class="container">
            <div class="column text-center">
                <button class="btn btn-primary">
                    <a href="{{route('cartoes.create')}}" style="text-decoration: none; color: white">Novo cartão</a>
                </button>
            </div>
        </div>


    </div>
@endsection


