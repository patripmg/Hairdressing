@extends('layouts.app')

@section('tittle', 'Detalle de productos')

@section('content')
<h1 class="text-center">Detalle de productos</h1>

<div class="container mt-5 pt-5 d-flex justify-content-center">
    <div class="row ">
        <div class="col-md-4 text-center">
            <div class="card shadow" style="width: 30rem;">

                <img src="{{ $product->img ?: asset('/img/nofoto.jpg') }}" onclass="card-img-top"
                    onclick="window.location = '{{ route ('product' , $product->id)}}'">

                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }} </h5>
                    <p>{{ $product->description}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-center mt-2 pt-2">
    <div class="row ">

        


        <div class="col-12 col-md-4 ">
            <div class="py-2 my-2 d-flex justify-content-center">
                <a href="{{ route ('products.edit', $product) }}" class="btn btn-success">EDITAR</a>
            </div>
        </div>




        <div class="col-12 col-md-4">
            <div class="py-2 my-2 d-flex justify-content-center">
                <a href="{{ route ('products') }}" class="btn btn-warning">VOLVER</a>
            </div>
        </div>



        <form method="post" action="{{ route ('products.delete', $product) }}">
            @method("DELETE")
            @csrf
            <div class="col-12 col-md-4">
                <div class="py-2 my-2 d-flex justify-content-center">

                    <input type="submit" value="ELIMINAR" class="btn btn-danger"></button>

                    {{--   <a href="{{ route ('products.delete', $product) }}" class="btn btn-danger">BORRAR</a> --}}
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
