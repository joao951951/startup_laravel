@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>
                        CRUD
                    </h1>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>{{ __('Bem vindo') }}</h2>
                    <div>
                        <button>CADASTRAR NOVO</button>
                        <button>CONSULTAR EXISTENTES</button>
                        <button>APAGAR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
