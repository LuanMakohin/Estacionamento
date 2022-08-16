@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <h1 style="text-align: center">Cadastros</h1>
        </div>
        @if($cadastros)
            <div class="row">
                <table class="table table-dark table-striped">
                    <thead style="text-align: center">
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Veículo</th>
                        <th scope="col">Placa</th>
                        <th scope="col">Saldo</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>

                    <tbody style="text-align: center">
                    @foreach($cadastros as $cadastro)
                        <tr>
                            <td>{{$cadastro->id_cadastro}}</td>
                            <td>{{ $cadastro->nome}}</td>
                            <td>{{$cadastro->carro}}</td>
                            <td>{{$cadastro->placa}}</td>
                            <td>{{number_format($cadastro->saldo,2)}}</td>
                            <td>
                                <button class="btn btn-warning"><a style="text-decoration: none;color: black" href="{{route('cadastros.show',$cadastro->id_cadastro)}}"><i class="fa-solid fa-eye"></i></a></button>
                                <button class="btn btn-info"><a style="text-decoration: none;color: black" href="{{route('cadastros.edit',$cadastro->id_cadastro)}}"><i class="fa-solid fa-pen-to-square"></i></a></button>
                                <button class="btn btn-danger"><a style="text-decoration: none;color: black" href="{{route('cadastros.destroy',$cadastro->id_cadastro)}}"><i class="fa-solid fa-trash-can"></i></a></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $cadastros->links() }}
            </div>
        @else
            <div class=" row justify-content-md-center ">
                <div class="col-md-auto">
                    <div class="alert alert-danger text-md-center align-items-md-center" role="alert">
                        Não existem cadastros!
                    </div>
                </div>
            </div>
        @endif
        <div class="row justify-content-md-center">
            <div class="col-md-auto" style="margin-bottom: 20px">
                <a href="{{route('cadastros.create')}}"><button type="button"  class="btn btn-dark">Cadastrar novo usuario</button></a>
            </div>
        </div>
    </div>
@endsection
