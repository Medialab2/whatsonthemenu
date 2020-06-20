@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row dashboard">
        <h1 class="col-md-10 dashboard__title">
            {{ Auth::user()->restaurant_name}}
        </h1>
        <div class="col-md-2 dashboard__button">
            <button class="btn btn-secondary btn-lg">Edit profile</button>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="dashboard-overview">
                <div class="dashboard-overview__title">
                    <h2>Dashboard</h2>
                </div>
                <hr>
                <div class="dashboard-overview__buttons">
                    <a class="btn btn-secondary btn-lg btn-block" href="{{ route('menu.index') }}">Manage gerechten</a>
                    <a class="btn btn-secondary btn-lg btn-block">Manage accesibilty</a>
                    <a class="btn btn-secondary btn-lg btn-block">Restaurant page</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 dashboard-status">
            <h2> Status</h2>
            <hr>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width:30%">
                    Homepagina 30%
                </div>
                <div class="progress-bar bg-info" role="progressbar" style="width:40%">
                    Bekeken gerechten 40%
                </div>
                <div class="progress-bar bg-danger" role="progressbar" style="width:30%">
                    Klikte meteen weg 60%
                </div>
            </div>
            <p>Aantal bezoekers: 100</p>

            <div class="recenties">
                <div class="card text-center text-white bg-dark">
                    <div class="card-header">
                      Recentie
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer text-muted">
                      2 days ago
                    </div>
                </div>
                <br>
                <div class="card text-center text-white bg-dark">
                    <div class="card-header">
                      Recentie
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer text-muted">
                      5 days ago
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection