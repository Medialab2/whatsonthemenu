@extends('layouts.app')

@section('content')
<div class="container">
<div class='landingWrapper'>
    <h1>What's on the Menu?</h1>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"><img src="img/location_on.svg" alt="My SVG Icon"></span>
        </div>
        <input type="text" class="form-control" placeholder="Vul hieronder uw postcode in, zodat wij restaurants bij u in de buurt kunnen vinden." aria-label="Username" aria-describedby="basic-addon1">
      </div>
    <h1>Over ons</h1>
    <div class='aboutWrapper'>
        <p>
            What's on the menu is een applicatie speciaal ontwikkeld voor mensen
            met een visuele beperking. Door gebruik te maken van deze applicatie
            kunnen blinden en slecht ziende mensen het menu inlezen van vele
            restaurants in de buurt.
        </p>
    </div>
</div>
</div>

@endsection