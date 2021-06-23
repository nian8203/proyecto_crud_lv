@extends('layouts.app')

@section('content')

<div class="container" style="margin: 30px auto; width: 600px;">

    <h1>Editar</h1>
    <form action="{{url('/cliente/'.$cliente->id)}}" method="post" enctype="multipart/form-data">

        @csrf
        {{method_field('PATCH')}}
        @include('cliente.form')

    </form>

</div>

@endsection