@extends('layouts.app')

@section('tittle', 'Modificar el producto')

@section('content')
<h1>Modificar el producto</h1>

<form method="post" action="{{ route ('products.update', $product) }}"  enctype="multipart/form-data">
   @method("PUT")
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" placeholder="Nombre del producto" name="name" value="{{ $product->name }}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <textarea class="form-control" id="description" rows="3" name="description" placeholder="Cuéntanos qué le hacce especial">{{ $product->description }}</textarea>
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">Imagen</label>
        <input class="form-control" type="file" id="file" name="img">
    </div>

    {{-- <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-warning text-center">ENVIAR</button>
    </div> --}}
    <input type="submit" value="Enviar" class="btn btn-warning">
</form>

<x-notification />
@endsection
