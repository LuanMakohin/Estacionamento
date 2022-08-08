@extends('layouts.master')
@section('content')
    <form action="{{route('cartoes.show',$id)}}" method="post">
        @csrf
        @method('GET')
        @include('cartoes.form')
        <div class="row mr-auto">
            <div class="col-md-2 ">
                <button class="btn btn-primary" type="submit"><a style="text-decoration: none;color: white" href="{{route('cartoes.edit',$id)}}">Editar</a></button>
            </div>
            <div class="col-md-2 ">
                <button class="btn btn-secondary" type="submit"><a style="text-decoration: none;color: white" href="{{route('cartoes.index')}}">Voltar</a></button>
            </div>
        </div>

    </form>
@endsection
