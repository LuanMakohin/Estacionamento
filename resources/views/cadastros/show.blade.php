@extends('layouts.master')
@section('content')
    @include('cadastros.form')
    <div class="container">
        <div class="row justify-content-md-center " style="margin-top: 20px;margin-bottom: 20px">
            <div class="col-md-auto ">
                <a class="btn btn-info" href="{{route('cadastros.edit',$cadastro->id_cadastro)}}" role="button">Alterar usuário</a>
            </div>
            <div class="col-md-auto ">
                <a class="btn btn-success" href="{{route('cartoes.create',$cadastro->id_cadastro)}}" role="button">Novo cartão</a>
            </div>
            <form class="col-md-auto" action="{{route('cadastros.destroy',$cadastro->id_cadastro)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit" role="button">Excluir usuário</button>
            </form>
        </div>
    </div>
@endsection
