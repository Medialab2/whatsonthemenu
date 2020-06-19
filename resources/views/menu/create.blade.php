@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Voeg item toe</h1>
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
      <form method="post" action="{{ route('menu.store') }}">
        @csrf
        <div class="form-group">
          <label for="name">name:</label>
          <input type="text" class="form-control" name="name" required/>
        </div>
        <div class="form-group">
          <label for="price">price:</label>
          <input type="text" class="form-control" name="price" required/>
        </div>
        <div class="form-group">
          <label for="ingredients">ingredients:</label>
          <input type="text" class="form-control" name="ingredients" required/>
        </div>
        <button type="submit" class="btn btn-primary">Add item</button>
      </form>
    </div>
  </div>
</div>
@endsection