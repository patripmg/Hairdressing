@extends('layouts.app')

@section('tittle', 'Contacta con nosotros')

@section('content')
<h1 class="text-center py-3 my-3">Contactar</h1>

<form action="{{ route ('contact') }}" method="post">
    <div class="container py-3 my-3">
        <div class="row">
            <div class="col-12">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" placeholder="Nombre del producto" name="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Nombre del producto" name="email">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descripción</label>
                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                </div>

                <input type="submit" value="Enviar" class="btn btn-warning">
            </div>
        </div>
    </div>

</form>
@endsection
