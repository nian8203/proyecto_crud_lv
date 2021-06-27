@extends('layouts.app')
@section('content')

@if(Session::has('msn'))
<div class="alert alert-dark alert-dismissible fade show" role="alert">
    <strong>{{Session::get('msn')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="">
    <a href="{{url('/cliente/create')}}" class="btn btn-primary float-right mb-4 mr-4">
        <i class="fas fa-user-plus"></i>
        Cliente
    </a>

    <table class="table table-hover">
        <thead>
            <tr class="">
                <th scope="col" hidden>id</th>
                <th scope="col">Foto</th>
                <th scope="col">Documento</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Telefono</th>
                <th scope="col">Direccion</th>
                <th scope="col">Correo</th>
                <th scope="col">Pass</th>
                <th scope="col" class=" text-center">Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $c)
            <tr>
                <th scope="row" hidden>{{$c->id}}</th>
                <td>
                    <div class="">
                        <img src="{{asset('storage').'/'.$c->foto}}" alt="" class="img-fluid rounded-circle border border-5 border-light" width="30px">
                    </div>
                </td>
                <td>{{$c->documento}}</td>
                <td>{{$c->nombre}}</td>
                <td>{{$c->apellido}}</td>
                <td>{{$c->telefono}}</td>
                <td>{{$c->direccion}}</td>
                <td>{{$c->correo}}</td>
                <td>{{$c->pas}}</td>

                <td style="width: 100px; padding: 6px 50px 6px 6px;">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="{{url('/cliente/'.$c->id.'/edit')}}" class="btn btn-default">
                                <i class="fas fa-user-edit" style="color: #de3c2f;"></i>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <!-- <form action="{{url('/cliente/'.$c->id)}}" method="post"> -->
                            <form action="{{url('/cliente/'.$c->id)}}" method="post">
                                @csrf
                                {{method_field('DELETE')}}
                                <button type="submit" style="border: none; padding-top: 7px; color: #de3c2f;" class="btn btn-outline-link">
                                    <i class="fas fa-user-minus"></i>
                                </button>
                                <!-- <a href="" type="" class="btn btn-default" style="color: #de3c2f;" onclick="return confirm('Esta seguro de eliminar este registro?')">
                                    <i class="fas fa-user-minus"></i>
                                </a> -->
                                <!-- <input type="submit" class="btn btn-danger" value="Delete" onclick="return confirm('Esta seguro de eliminar este registro?')" class="btn btn-danger"> -->
                            </form>
                        </div>
                    </div>


                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>


@endsection