@extends('layouts.master')
@section('content')
        @csrf
    <form action="{{route('cartoes.store')}}" method="post">
        @include('cartoes.form')
        <div class="row justify-content-center " style="margin-top: 20px">
            <div class="col-md-auto align-items-md-center">
                <button class="btn btn-success" type="submit">Salvar</button>

                <a type="submit" href="{{route('cartoes.index')}}" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>
    </form>@endsection
