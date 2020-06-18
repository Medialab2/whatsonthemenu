@extends('layouts.app')

@section('content')
<div class="container ">

<div>
    <a style="margin: 25px;" href="{{ route('menu.create')}}" class="btn btn-primary">Add new item</a>
</div>
<div class="col-sm-12">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
</div>
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Drinken</h1>


        @foreach($drinken as $drinken)
        <div class="card bg-dark">
            <div class="card-body">
                <h5 class="card-title">Title: {{$drinken->name}}</h5>
                <p class="card-text">Prijs: {{$drinken->price}}</p>
                <p class="card-text">Ingerdienten: {{$drinken->ingredients}}</p>

                {{-- <a href="{{ route('features.show' ,$drinken->id)}}" class="btn btn-primary">Details</a> --}}
            </div>
        </div>
        @endforeach

        <div>
        </div>
    </div>
        @endsection