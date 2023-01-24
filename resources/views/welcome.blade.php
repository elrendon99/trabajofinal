@extends('layouts.appfront')

@section('content')

<div class="container-fluid p-0">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @forelse ($carrusel as $item)
            <li data-target="#carouselExampleCaptions" data-slide-to="{{$item->orden}}" class="@if($loop->index==0) active @endif"></li>
            @empty
            @endforelse
        </ol>
        <div class="carousel-inner">
        @forelse ($carrusel as $item)
          <div class="carousel-item @if($loop->index==0) active @endif">
            <img src="/img/carrusel/{{$item->urlfoto}}" class="d-block w-100" alt="{{$item->frase}}">
            <div class="carousel-caption d-none d-md-block pb-5">
                <h5>{{$item->descripcion}}</h5>
                
            </div>
          </div>
        @empty
        @endforelse
          
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>



<!-- artesanias -->

<div class="container">
    <div class="row mt-5 mb-5 justify-content-center text-center align-items-center bg-success">
        <div class="col-sm-8 bg-light  pt-5 pb-5">
            <div class="row">
            <div class="col-sm-12">
                <h2 class="text-warning">PRODUCTOS MÁS DEMANDADOS</h2>
            </div>
            @forelse ($producto as $item)
                <div class="col-sm-4">
                    <div class="card">
                        <a href="/artesanias/{{$item->categoria->slug}}/{{$item->slug}}">
                            <img src="/img/producto/{{$item->urlfoto}}" class="card-img-top" alt="{{$item->nombre}}">
                        </a>
                    </div>
                    <div class="card-footer">
                        <a href="/artesanias/{{$item->categoria->slug}}/{{$item->slug}}" class="btn btn-warning btn-block">{{$item->nombre}}</a>
                    </div>
                </div>
            @empty
            @endforelse
            </div>
        </div>
        <div class="col-sm-4">
            <p class="display-4 font-anton text-white">CONTACTO: <br>918098335 <br> </p>
        </div>
    </div>
</div>
<!-- artesanias /-->

<!-- publicaciones-->
<div class="container">
    
        @forelse ($posts as $r)
        <div class="row mb-4">
            <div class="col-sm-4">
                <img src="/img/post/{{$r->urlfoto}}" alt="{{$r->nombre}}" class="img-fluid rounded-left">
            </div>
            <div class="col-sm-8 border rounded-right bg-light row align-items-center">
                <div class="col-sm-12">
                    <h3 class="text-danger">{{$r->nombre}}</h3>
                    <p>{{$r->description}}</p>
                    <span class="small">{{$r->created_at->diffForHumans()}}</span>
                </div>
            </div>
        </div>
        @empty
            
        @endforelse
    
</div>
<!-- publicaciones/-->


@endsection