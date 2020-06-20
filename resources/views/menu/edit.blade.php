@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Edit item</h1>
    <div>

      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div><br />
      @endif
      <form method="post" action="{{ route('menu.update', $item->id) }}">
        @method('PATCH') 
        @csrf
        <div class="form-group">
          <label for="name">Naam van het product:</label>
        <input type="text" class="form-control" name="name" value="{{$item->name}}" required/>
        </div>
        <div class="form-group">
          <label for="price">Prijs van het product:</label>
          <input type="text" class="form-control" name="price" value="{{$item->price}}" required/>
        </div>
        <div class="form-group">
          <label for="ingredients">Ingredienten:</label>
          <input type="text" class="form-control" name="ingredients" value="{{$item->ingredients}}" required/>
        </div>
        <button type="submit" class="btn btn-primary">update</button>
      </form>
    </div>
  </div>
</div>
@endsection