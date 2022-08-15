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
                        <th scope="col">Usuário</th>
                        <th scope="col">Hora de entrada</th>
                        <th scope="col">Vaga</th>
                        <th scope="col">Saldo</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cartoes as $cartao)
                    <tr>
                        <td class="table-dark">{{$cartao->id_cartao ?? ''}}</a></td>
                        <td class="table-dark">{{$cartao->cadastro->nome}}</td>
                        <td class="table-dark">{{$cartao->hora_entrada ?? ''}}</td>
                        <td class="table-dark">{{$cartao->vaga ?? ''}}</td>
                        <td class="table-dark">{{$cartao->saldo}}</td>
                        <td>
                            <button class="btn btn-warning"><a style="text-decoration: none;color: black" href="{{route('cartoes.show',$cartao->id_cartao)}}"><i class="fa-solid fa-eye"></i></a></button>
                            <button class="btn btn-info"><a style="text-decoration: none;color: black" href="{{route('cartoes.edit',$cartao->id_cartao)}}"><i class="fa-solid fa-pen-to-square"></i></a></button>
                            <button class="btn btn-danger"><a style="text-decoration: none;color: black" href="{{route('cartoes.destroy',$cartao->id_cartao)}}"><i class="fa-solid fa-trash-can"></i></a></button>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $cartoes->links() }}
            </div>
        @else
            <div class=" row justify-content-md-center ">
                <div class="col-md-auto">
                    <div class="alert alert-danger text-md-center align-items-md-center" role="alert">
                        Nenhum cartão cadastrado!
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection


