@extends('layouts.app')

@section('content')
    <div class="register">
        <form method="post" class="form-register">
            @csrf
            <fieldset>
                <h2 class="form-register__subtitle">
                    You rock! <br>
                    Dank je wel voor het registreren. <br>
                    Klik op de onderstaande button en voeg je menu(s) toe. <br>
                </h2>
                <div class="form-register-group row">
                    <img src="{{ asset('images/icon-smiley-wink.png')}}" alt="winking smiley" class="form-register-end">
                </div>
                <div class="form-register-group row">
                    <a href="{{ url('/dashboard') }}" type="button" name="dashboard" class="form-register__btn form-register-end row btn">{{ __('Naar dashboard') }}</a>
                </div>
            </fieldset>
        </form>
    </div>
@endsection