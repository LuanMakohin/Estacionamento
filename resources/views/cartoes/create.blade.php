@extends('layouts.master')
    @section('content')
    <form action="{{route('cartoes.store')}}" method="post">
        @include('cartoes.form')
        <div class="row justify-content-center ">
            <div class="col-md-2 align-items-md-center">
                <button class="btn btn-primary" type="submit">Salvar</button>
            </div>
        </div>
    </form>
    @endsection
