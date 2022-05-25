
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Painel de Administração') }}</div>
                <div class="row p-3">
                    <div class="col-sm-4">
                        <div class="card">
                            <a href="#" class="card-body btn btn-primary">
                                <i class="fa-solid fa-cart-shopping"></i>  Carrinho de Pedidos
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <a href="#" class="card-body btn btn-primary">
                                <i class="fa-solid fa-user"></i> Clientes
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <a href="#" class="card-body btn btn-primary">
                                <i class="fa-solid fa-coins"></i> Financeiro
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
