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
      <form method="post" action="{{ route('menu.update', $drinken->id) }}">
        @method('PATCH') 
        @csrf
        <div class="form-group">
          <label for="name">name:</label>
        <input type="text" class="form-control" name="name" value="{{$drinken->name}}" required/>
        </div>
        <div class="form-group">
          <label for="price">price:</label>
          <input type="text" class="form-control" name="price" value="{{$drinken->price}}" required/>
        </div>
        <div class="form-group">
          <label for="ingredients">ingredients:</label>
          <input type="text" class="form-control" name="ingredients" value="{{$drinken->ingredients}}" required/>
        </div>
        <button type="submit" class="btn btn-primary">update</button>
      </form>
    </div>
  </div>
</div>
@endsection