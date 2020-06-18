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
@section('scripts')
    <script>
        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var animating; //to prevent quick multi-click glitches

        $(".form-register__btn--next").click(function(){
            if(animating) return false;
            animating = true;

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //activate next step on progressbar using the index of next_fs
            $(".register__progressbar li").eq($(".form-register fieldset").index(next_fs)).addClass("register__progressbar--active");

            //hide the current fieldset with style
            current_fs.animate({}, {
                complete: function(){
                    current_fs.hide();
                    animating = false;

                    //Show the next fieldset
                    next_fs.fadeIn(1000);
                },
            });
        });

        $(".form-register__btn--previous").click(function(){
            if(animating) return false;
            animating = true;

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //de-activate current step on progressbar
            $(".register__progressbar li").eq($(".form-register fieldset").index(current_fs)).removeClass("register__progressbar--active");

             //hide the current fieldset with style
             current_fs.animate({}, {
                complete: function(){
                    current_fs.hide();
                    animating = false;

                    //Show the next fieldset
                    previous_fs.fadeIn(1000); 
                },
            });
        });
    </script>
@endsection