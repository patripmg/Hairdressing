@extends('layouts.app')

@section('tittle', 'Alta del producto')

@section('content')
<h1 class="text-center">Alta del producto</h1>

<form method="post" action="{{ route ('new') }}" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" placeholder="Nombre del producto"
                        value="{{ old('name') }}" name="name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descripción</label>
                    <textarea class="form-control" id="description" rows="3" name="description"
                        placeholder="Cuéntanos qué le hace especial">{{ old('description') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">Imagen</label>
                    <input class="form-control" type="file" id="file" name="img">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-warning text-center">ENVIAR</button>
                </div>
            </div>
        </div>
    </div>

</form>

<x-notification />
@endsection
