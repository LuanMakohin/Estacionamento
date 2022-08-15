@extends('layouts.master')
@section('content')
    @csrf
    <form action="{{route('cadastros.store')}}" method="POST">
        @include('cadastros.form')
        <div class="container" style="margin-bottom: 20px">
            <div class="row justify-content-md-center" style="margin-top: 20px">
                <div class="col-md-auto ">
                    <button type="submit" class="btn btn-success">Salvar usuário</button>

                    <a type="submit" href="{{route('cadastros.index')}}" class="btn btn-secondary">Cancelar</a>
                </div>
            </div>
        </div>
    </form>
@endsection
