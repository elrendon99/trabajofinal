@extends('layouts.appfront')

@section('content')
<div class="container bg-warning pb-5">
    <div class="row">
        <h1 class="p-3 text-danger mt-5"> {{$producto->nombre}}</h1>
        
        <img src="/img/producto/{{$producto->urlfoto}}" class="img-fluid">

    </div>
    <div class="row m-5 bg-white rounded-lg">
        <div class="col-sm-9 p-5 text-justify">
            {!!$producto->descripcion!!}
        </div>
        <div class="col-sm-3 text-center pt-5 pb-5 text-white bg-success">
            <div>
                <h2 class="">CONTACTO</h2>
                <hr>
                <p class="h2">918098335 </p>
                

            </div>

        </div>
    </div>

  


</div>
@endsection