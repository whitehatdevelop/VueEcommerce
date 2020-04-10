@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card padding">
            <header>
                <h2>Mi carrito de comprar</h2>
            </header>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <product-shopping-component></product-shopping-component>               
                    </div>
                    <div class="col-12 col-md-6 payments">
                        <p>Paga con PayPal</p>     
                        <img src="" alt="" width="120">     
                        <img src="" alt="" width="120">   
                        <div>
                        <a href="#" class="btn btn-primary">Proceder al pago</a>
                        </div>      
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection