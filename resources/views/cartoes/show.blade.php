@extends('layouts.master')
@section('content')
        @include('cartoes.form')
        <div class="container">
            <div class="row justify-content-center" style="margin-top: 20px;margin-bottom: 20px">
                <div class="col-md-auto ">
                    <button class="btn btn-primary" type="submit"><a style="text-decoration: none;color: white" href="{{route('cartoes.edit',$cartao->id_cartao)}}">Editar</a></button>
                </div>
                <div class="col-md-auto ">
                    <button class="btn btn-secondary" type="submit"><a style="text-decoration: none;color: white" href="{{route('cartoes.index')}}">Voltar</a></button>
                </div>
                <form class="col-md-auto" action="{{route('cartoes.destroy',$cartao->id_cartao)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" role="button">Excluir</button>
                </form>
            </div>
        </div>
@endsection
