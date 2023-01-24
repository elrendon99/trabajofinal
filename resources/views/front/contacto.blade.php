@extends('layouts.appfront')

@section('content')
<div class="container bg-warning pb-5">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-danger mt-5">CONTACTO</h1>
        </div>

        <div class="col-sm-8 bg-white p-5">
            <h2>DATOS DE CONTACTO</h2>
                <ul>
                    
                    <li>Dirección: Calle lope de vega {{$config->direccion}}</li>
                    <li>movil: 918098335{{$config->celular}}</li>
                    <li>email: workhand@gmail.com{{$config->email}}</li>
                </ul>


            <h2 class="mt-5">FORMULARIO</h2>
            @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{{\Session::get('success')}}</li>
                </ul>
            </div>
            @endif


            <form action="/contacto" method="post">
              
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                      </div>
                   
                    
                    <div class="form-group">
                      <label for="mensaje">Mensaje</label>
                      <textarea class="form-control" name="mensaje" id="mensaje" rows="3"></textarea>
                    </div>

                    <input type="submit" class="btn btn-danger" name="btnenviar" value="ENVIAR MENSAJE">
                 
            </form>



    </div>
</div>
@endsection