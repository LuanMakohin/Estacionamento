@extends('layouts.master')
@section('content')
    <form action="{{route('cartoes.update',$cartao->id_cartao)}}" method="POST">
        @csrf
        @method('PATCH')
        @include('cartoes.form')
        <div class="container">
            <div class="row justify-content-md-center " style="margin-top: 20px">
                <div class="col-md-auto ">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                <div class="col-md-auto ">
                    <a type="submit" href="{{route('cartoes.index')}}" class="btn btn-secondary">Cancelar</a>
                </div>
            </div>

        </div>
    </form>
@endsection
