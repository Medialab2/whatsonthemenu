@extends('layouts.app')

@section('content')
    <div class="register">
        <h1 class="register__title">Registreer uw restaurant</h1>

        <ul class="register__progressbar">
            <li class="form-register--active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>

        <h2 class="register__subtitle">Maak account:</h2>

        <form method="POST" action="/" enctype="multipart/form-data" class="form-register">
            <fieldset>
                <div class="form-register-group form-group row">
                    <label for="username" class="form-register__label col-sm-5">Gebruikersnaam:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-register__input form-control" value="">
                    </div>
                </div>
                <div class="form-register-group form-group row">
                    <label for="password" class="form-register__label col-sm-5">Wachtwoord:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-register__input form-control" value="">
                    </div>
                </div>
                <div class="form-register-group form-group row">
                    <label for="passwordConfirm" class="form-register__label col-sm-5">Bevestig wachtwoord:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-register__input form-control" value="">
                    </div>
                </div>
                <input type="button" name="next" class="form-register__btn float-right next" value="Next"/>
            </fieldset>
        </form>
    </div>
@endsection