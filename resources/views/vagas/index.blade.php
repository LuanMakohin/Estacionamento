@extends('layouts.master')
@section('content')
    <div>
        <div>
            <h1 style="text-align: center">Vagas</h1>
        </div>
        @if($vagas)
            <div style="margin-top: 20px">
                <table class="table table-dark table-striped" style="text-align: center">
                    <thead>
                    <tr>
                        <th scope="col">Vaga</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($vagas as $vaga)
                        <tr>
                            <td class="table-dark">{{$vaga->id_vaga ?? ''}}</a></td>
                            <td class="table-dark">
                                @if($vaga->cheia)
                                    Ocupada
                                @else
                                    Vazia
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$vagas->links()}}
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


