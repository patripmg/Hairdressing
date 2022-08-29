@extends('layouts.app')
@section('title', 'Inicio de la peluquería')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="inicio text-center py-4 my-4">Bienvenidos a TuPelu</h1>
        </div>
    </div>
</div>

<div class="container py-3 my-3">
    <div class="row">
        <div class="col-12">
                 <h2 class="py-5 my-5 servicios text-center"> SERVICIOS Y TRATAMIENTOS </h2>  
        </div>
        <div class="col-4 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="{{asset ('/img/corte.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">PELUQUERÍA</h5>
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <div class="text-center">
                    <a href="#" class="btn btn-warning">LEER MÁS</a>
                  </div>
                </div>
              </div>
        </div>

        <div class="col-4 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="{{asset ('/img/maquillaje.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">ESTÉTICA</h5>
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <div class="text-center">
                    <a href="#" class="btn btn-warning">LEER MÁS</a>
                  </div>
                  
                </div>
              </div>  
        </div>

        <div class="col-4 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="{{asset ('/img/tratamiento.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">TRATAMIENTOS</h5>
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <div class="text-center">
                    <a href="#" class="btn btn-warning">LEER MÁS</a>
                  </div>
                </div>
              </div>
        </div>

    </div>
</div>

<x-footer />
@endsection