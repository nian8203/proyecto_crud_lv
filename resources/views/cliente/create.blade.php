@extends('layouts.app')

@section('content')

<div class="container" style="margin: 30px auto; width: 600px;">


    <form action="{{url('/cliente')}}" method="post" enctype="multipart/form-data" >

        @csrf
        @include('cliente.form')
    

    </form>


</div>

@endsection