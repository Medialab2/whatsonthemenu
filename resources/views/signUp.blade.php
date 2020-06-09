@extends('layouts.app')

@section('content')
    <div class="register">
        <h1 class="register__title">Registreer uw restaurant</h1>
        <h2 class="register__subtitle">Maak account:</h2>

        <form method="POST" action="/" enctype="multipart/form-data" class="form-register">
            <div class="form-register-group form-group row">
                <label for="staticEmail" class="form-register__label col-sm-5">Email:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-register__input form-control" value="">
                </div>
            </div>

            <div class="form-register-group form-group row">
                <label for="staticEmail" class="form-register__label col-sm-5">Wachtwoord:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-register__input form-control" value="">
                </div>
            </div>

            <div class="form-register-group form-group row">
                <label for="staticEmail" class="form-register__label col-sm-5">Bevestig wachtwoord:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-register__input form-control" value="">
                </div>
            </div>

            <button type="submit" class="form-register__btn float-right">Volgende</button>
        </form>
    </div>
    
@endsection