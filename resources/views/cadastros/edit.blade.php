@extends('layouts.master')
@section('content')
    <form action="{{route('cadastros.update',$cadastro->id_cadastro)}}" method="POST">
        @csrf
        @method('PATCH')
        @include('cadastros.form')
        <div class="container">
            <div class="row justify-content-md-center " style="margin-top: 20px;margin-bottom: 20px">
                <div class="col-md-auto ">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                <div class="col-md-auto ">
                    <a type="submit" href="{{route('cadastros.index')}}" class="btn btn-secondary">Cancelar</a>
                </div>
            </div>
        </div>
    </form>
@endsection
