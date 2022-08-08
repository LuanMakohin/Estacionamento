@extends('layouts.master')

@section('content')
<div class="container" style="margin-top: 20px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center">{{ __('Dashboard') }}</div>

                <div class="card-body" style="text-align: center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Deslogado com sucesso!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
