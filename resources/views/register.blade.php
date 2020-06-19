@extends('layouts.app')

@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="register">
        <h1 class="register__title">Registreer uw restaurant</h1>

        <ul class="register__progressbar">
            <li class="register__progressbar--active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>

        <form method="post" action="{{ action('RegisterController@store') }}" class="form-register">
            @csrf
            <fieldset>
                <h2 class="form-register__subtitle">Account gegevens:</h2>
                <div class="form-register-group row">
                    <label for="username" class="form-register__label col-sm-5">Gebruikersnaam:</label>
                    <div class="col-sm-7">
                        <input type="text" name="username" class="form-register__input form-control" value="">
                    </div>
                </div>
                <div class="form-register-group row">
                    <label for="password" class="form-register__label col-sm-5">Wachtwoord:</label>
                    <div class="col-sm-7">
                        <input type="text" name="password" class="form-register__input form-control" value="">
                    </div>
                </div>
                <div class="form-register-group row">
                    <label for="password-confirm" class="form-register__label col-sm-5">Bevestig wachtwoord:</label>
                    <div class="col-sm-7">
                        <input type="text" name="password-confirm" class="form-register__input form-control" value="">
                    </div>
                </div>
                <input type="button" name="next" class="form-register__btn form-register__btn--next float-right" value="Volgende"/>
            </fieldset>

            <fieldset>
                <h2 class="form-register__subtitle">Gegevens eigenaar:</h2>
                <div class="form-register-group row">
                    <label for="firstname" class="form-register__label col-sm-5">Voornaam:</label>
                    <div class="col-sm-7">
                        <input type="text" name="firstname" class="form-register__input form-control" value="">
                    </div>
                </div>
                <div class="form-register-group row">
                    <label for="lastname" class="form-register__label col-sm-5">Achternaam:</label>
                    <div class="col-sm-7">
                        <input type="text" name="lastname" class="form-register__input form-control" value="">
                    </div>
                </div>
                <div class="form-register-group row">
                    <label for="email" class="form-register__label col-sm-5">Email:</label>
                    <div class="col-sm-7">
                        <input type="text" name="email" class="form-register__input form-control" value="">
                    </div>
                </div>
                <div class="form-register-group row">
                    <label for="phonenumber" class="form-register__label col-sm-5">Telefoonnummer:</label>
                    <div class="col-sm-7">
                        <input type="text" name="phonenumber" class="form-register__input form-control" value="">
                    </div>
                </div>
                <input type="button" name="previous" class="form-register__btn form-register__btn--previous float-left" value="Vorige"/>
                <input type="button" name="next" class="form-register__btn form-register__btn--next float-right" value="Volgende"/>
            </fieldset>

            <fieldset>
                <h2 class="form-register__subtitle">Restaurant gegevens:</h2>
                <div class="form-register-group row">
                    <label for="name" class="form-register__label col-sm-5">Naam:</label>
                    <div class="col-sm-7">
                        <input type="text" name="name" class="form-register__input form-control" value="">
                    </div>
                </div>
                <div class="form-register-group row">
                    <label for="address and number" class="form-register__label col-sm-5">Adres + nummer:</label>
                    <div class="col-sm-7">
                        <input type="text" name="address" class="form-register__input form-control" value="">
                    </div>
                </div>
                <div class="form-register-group row">
                    <label for="postalcode" class="form-register__label col-sm-5">Postcode:</label>
                    <div class="col-sm-7">
                        <input type="text" name="postalcode" class="form-register__input form-control" value="">
                    </div>
                </div>
                <div class="form-register-group row">
                    <label for="region" class="form-register__label col-sm-5">Regio:</label>
                    <div class="col-sm-7">
                        <input type="text" name="region" class="form-register__input form-control" value="">
                    </div>
                </div>
                <div class="form-register-group row">
                    <label for="phonenumber-restaurant" class="form-register__label col-sm-5">Telefoonnummer:</label>
                    <div class="col-sm-7">
                        <input type="text" name="phonenumber-rest" class="form-register__input form-control" value="">
                    </div>
                </div>
                <div class="form-register-group row">
                    <label for="chamber of commerce number" class="form-register__label col-sm-5">KVK nummer:</label>
                    <div class="col-sm-7">
                        <input type="text" name="chamber-of-commerce" class="form-register__input form-control" value="">
                    </div>
                </div>
                <input type="button" name="previous" class="form-register__btn form-register__btn--previous float-left" value="Vorige"/>
                <input type="button" name="next" class="form-register__btn  form-register__btn--next float-right" value="Volgende"/>
            </fieldset>

            <fieldset>
                <h2 class="form-register__subtitle">Toegankelijkheid blinden/slechtzienden:</h2>
                <div class="form-register-group row">
                    <label class="form-register__checkbox">Opstapjes zijn gemarkeerd
                        <input type="checkbox"/>
                        <div class="form-register__indicator"></div>
                    </label>
                </div>
                <div class="form-register-group row">
                    <label class="form-register__checkbox">Geleide/ hulphond is toegestaan
                        <input type="checkbox"/>
                        <div class="form-register__indicator"></div>
                    </label>
                </div>
                <div class="form-register-group row">
                    <label class="form-register__checkbox">Sterk kleurcontrast
                        <input type="checkbox"/>
                        <div class="form-register__indicator"></div>
                    </label>
                </div>
                <div class="form-register-group row">
                    <label class="form-register__checkbox">Werknemers zijn goed ingelicht over toegankelijkheid
                        <input type="checkbox"/>
                        <div class="form-register__indicator"></div>
                    </label>
                </div>
                <div class="form-register-group row">
                    <label class="form-register__checkbox">Minimale obstakels
                        <input type="checkbox"/>
                        <div class="form-register__indicator"></div>
                    </label>
                </div>
                <input type="button" name="previous" class="form-register__btn form-register__btn--previous float-left" value="Vorige"/>
                <input type="button" name="next" class="form-register__btn  form-register__btn--next float-right" value="Volgende"/>
            </fieldset>

            <fieldset>
                <h2 class="form-register__subtitle">Algemene voorwaarden:</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <input type="button" name="previous" class="form-register__btn form-register__btn--previous float-left" value="Vorige"/>
                <input type="submit" name="next" class="form-register__btn  form-register__btn--next form-register__btn--finish float-right" value="Registreren"/>
            </fieldset>

            <div class="form-register-group row">
                <p>- Alle velden zijn verplicht om in te vullen.</p>
            </div>
        </form>
    </div>
@endsection 

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