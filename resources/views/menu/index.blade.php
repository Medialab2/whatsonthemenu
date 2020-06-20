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
            <h1 class="display-3">Items</h1>


            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col">Producten:</th>
                        <th scope="col">Naam</th>
                        <th scope="col">Prijs</th>
                        <th scope="col">Ingerdienten</th>
                    </tr>
                </thead>
                @foreach($items as $item)
                <tbody>
                    <tr>
                        <th scope="row"></th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->ingredients}}</td>
                        <td><a href="{{ route('menu.edit',$item->id)}}" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form action="{{ route('menu.destroy', $item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            <div>
            </div>
        </div>
        @endsection