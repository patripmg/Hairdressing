@extends('layouts.app')

@section('tittle', 'Listado de productos')

@section('content')
<h1 class="text-center py-5 my-5">Listado de productos</h1>
<div class="container">
    <div class="row ">
        @foreach ($products as $product)

        <div class="col-md-4 my-5 d-flex justify-content-center">
            <div class="card cardedit shadow" style="width: 18rem;">
                <img src="{{ $product->img ?: asset('/img/nofoto.jpg') }}" onclass="card-img-top"
                    onclick="window.location = '{{ route ('product' , $product->id)}}'">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a class=" text-decoration-none text-black fw-bold "
                            href="{{ '/product/' . $product->id }}">{{ $product->name }}
                        </a>
                    </h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-12">
            <a href="{{ route ('new') }}" class="btn btn-warning">Nuevo producto</a>
        </div>
    </div>
</div>



<x-footer />

@endsection
