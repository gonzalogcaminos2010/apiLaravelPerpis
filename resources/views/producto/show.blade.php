@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4"><img src="{{ asset($producto->image) }}" width="250" alt="{{ $producto->nombre }}"></div>
                            <div class="thumbnail text-center"> <img onclick="change_image(this)" src="{{ asset($producto->image) }}" width="70"> <img onclick="change_image(this)" src="{{ asset($producto->image) }}" width="70"> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span class="ml-1"> <a href="{{ route('productos.index') }}"> Volver</a></span> </div> <i class="fa fa-shopping-cart text-muted"></i>
                            </div>
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Orianz</span>
                                <h5 class="text-uppercase">{{ $producto->nombre }}</h5>
                                <div class="price d-flex flex-row align-items-center"> <span class="act-price">{{ $producto->precio }}</span>

                                </div>
                            </div>
                            <p class="about">{{ $producto->descripcion }}</p>

                            <div class="cart mt-4 align-items-center"> <button class="btn btn-danger text-uppercase mr-2 px-4">Agregar al carro</button> <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
