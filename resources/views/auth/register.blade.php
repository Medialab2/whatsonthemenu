@extends('layouts.app')

@section('content')
    <div class="register">
        <h1 class="register__title">Registreer uw restaurant</h1>

        <ul class="register__progressbar">
            <li class="register__progressbar--active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>

        <form method="POST" action="{{ route('register') }}" class="form-register">
            @if ($errors->any())
            <div class="alert alert-danger test">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @csrf
            <fieldset>
                <h2 class="form-register__subtitle">Account gegevens:</h2>

                <div class="form-register-group row">
                    <label for="name" class="form-register__label col-sm-5">{{ __('Naam:') }}</label>
                    <div class="col-sm-7">
                        <input type="text" name="name" class="form-register__input form-control" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="form-register-group row">
                    <label for="password" class="form-register__label col-sm-5">{{ __('Wachtwoord:') }}</label>
                    <div class="col-sm-7">
                        <input type="password" class="form-register__input form-control" name="password">
                    </div>
                </div>
                <div class="form-register-group row">
                    <label for="password-confirm" class="form-register__label col-sm-5">{{ __('Bevestig wachtwoord:') }}</label>
                    <div class="col-sm-7">
                        <input type="password" class="form-register__input form-control" name="password_confirmation">
                    </div>
                </div>

                <button type="button" name="next" class="form-register__btn  form-register__btn--next float-right">
                    {{ __('Volgende') }}
                </button>
            </fieldset>

            <fieldset>
                <h2 class="form-register__subtitle">Gegevens eigenaar:</h2>

                <div class="form-register-group row">
                    <label for="firstname" class="form-register__label col-sm-5">{{ __('Voornaam:') }}</label>
                    <div class="col-sm-7">
                        <input type="text" name="firstname" class="form-register__input form-control" value= "{{ old('firstname') }}">
                    </div>
                </div>
                <div class="form-register-group row">
                    <label for="lastname" class="form-register__label col-sm-5">{{ __('Achternaam:') }}</label>
                    <div class="col-sm-7">
                        <input type="text" name="lastname" class="form-register__input form-control" value= "{{ old('lastname') }}">
                    </div>
                </div>
                 <div class="form-register-group row">
                    <label for="email" class="form-register__label col-sm-5">{{ __('Email:') }}</label>
                    <div class="col-sm-7">
                        <input type="email" name="email" class="form-register__input form-control" value="{{ old('email') }}">
                    </div>
                </div>
                <div class="form-register-group row">
                    <label for="phonenumber" class="form-register__label col-sm-5">{{ __('Telefoonnummer:') }}</label>
                    <div class="col-sm-7">
                        <input type="text" name="phonenumber" class="form-register__input form-control" value="{{ old('phonenumber') }}">
                    </div>
                </div>
               
                <button type="button" name="previous" class="form-register__btn form-register__btn--previous float-left">
                    {{ __('Vorige') }}
                </button>
                <button type="button" name="next" class="form-register__btn  form-register__btn--next float-right">
                    {{ __('Volgende') }}
                </button>
            </fieldset>

            <fieldset>
            <h2 class="form-register__subtitle">Restaurant gegevens:</h2>

                <div class="form-register-group row">
                    <label for="restaurant-name" class="form-register__label col-sm-5">{{ __('Naam:') }}</label>
                    <div class="col-sm-7">
                        <input type="text" name="restaurantname" class="form-register__input form-control" value= "{{ old('restaurant-name') }}">
                    </div>
                </div>
                <div class="form-register-group row">
                    <label for="address and number" class="form-register__label col-sm-5">{{ __('Adres + number:') }}</label>
                    <div class="col-sm-7">
                        <input type="text" name="address" class="form-register__input form-control" value= "{{ old('address') }}">
                    </div>
                </div>
                <div class="form-register-group row">
                    <label for="postalcode" class="form-register__label col-sm-5">{{ __('Postcode:') }}</label>
                    <div class="col-sm-7">
                        <input type="text" name="postalcode" class="form-register__input form-control" value= "{{ old('postalcode') }}">
                    </div>
                </div>
                <div class="form-register-group row">
                    <label for="region" class="form-register__label col-sm-5">{{ __('Regio:') }}</label>
                    <div class="col-sm-7">
                        <input type="text" name="region" class="form-register__input form-control" value= "{{ old('region') }}">
                    </div>
                </div>
                <div class="form-register-group row">
                    <label for="phonenumber-restaurant" class="form-register__label col-sm-5">{{ __('Telefoonnummer:') }}</label>
                    <div class="col-sm-7">
                        <input type="text" name="phonenumber-rest" class="form-register__input form-control" value= "{{ old('phonenumber-rest') }}">
                    </div>
                </div>
                <div class="form-register-group row">
                    <label for="chamber of commerce number" class="form-register__label col-sm-5">{{ __('KVK nummer:') }}</label>
                    <div class="col-sm-7">
                        <input type="text" name="chamber-of-commerce" class="form-register__input form-control"  value= "{{ old('chamber-of-commerce') }}">
                    </div>
                </div>

                <button type="button" name="previous" class="form-register__btn form-register__btn--previous float-left">
                    {{ __('Vorige') }}
                </button>
                <button type="button" name="next" class="form-register__btn  form-register__btn--next float-right">
                    {{ __('Volgende') }}
                </button>
            </fieldset>

            <fieldset>
                <h2 class="form-register__subtitle">Toegankelijkheid blinden/slechtzienden:</h2>

                <div class="form-register-group row">
                    <label class="form-register__checkbox">{{ __('Opstapjes zijn gemarkeerd') }}
                        <input type="hidden" name="checkbox-1" value="0"/>
                        <input type="checkbox" name="checkbox-1" value="1"/>
                        <div class="form-register__indicator"></div>
                    </label>
                </div>
                <div class="form-register-group row">
                    <label class="form-register__checkbox">{{ __('Geleide/ hulphond is toegestaan') }}
                        <input type="hidden" name="checkbox-2" value="0"/>
                        <input type="checkbox" name="checkbox-2" value="1"/>
                        <div class="form-register__indicator"></div>
                    </label>
                </div>
                <div class="form-register-group row">
                    <label class="form-register__checkbox">{{ __('Sterk kleurcontrast') }}
                        <input type="hidden" name="checkbox-3" value="0"/>
                        <input type="checkbox" name="checkbox-3" value="1"/>
                        <div class="form-register__indicator"></div>
                    </label>
                </div>
                <div class="form-register-group row">
                    <label class="form-register__checkbox">{{ __('Werknemers zijn goed ingelicht over toegankelijkheid') }}
                        <input type="hidden" name="checkbox-4" value="0"/>
                        <input type="checkbox" name="checkbox-4" value="1"/>
                        <div class="form-register__indicator"></div>
                    </label>
                </div>
                <div class="form-register-group row">
                    <label class="form-register__checkbox">{{ __('Minimale obstakels') }}
                        <input type="hidden" name="checkbox-5" value="0"/>
                        <input type="checkbox" name="checkbox-5" value="1"/>
                        <div class="form-register__indicator"></div>
                    </label>
                </div>

                <button type="button" name="previous" class="form-register__btn form-register__btn--previous float-left">
                    {{ __('Vorige') }}
                </button>
                <button type="button" name="next" class="form-register__btn  form-register__btn--next float-right">
                    {{ __('Volgende') }}
                </button>
            </fieldset>

            <fieldset>
                <h2 class="form-register__subtitle">Algemene voorwaarden:</h2>

                <div style="height:250px;overflow:auto">
                <p>Op deze pagina vindt u de algemene voorwaarden van WhatsOnTheMenu , zoals deze beschikbaar is gesteld door WhatsOnTheMenu . In deze algemene voorwaarden geven wij aan onder welk voorbehoud wij de informatie op onze website aan u aanbieden.</p><p><strong>Intellectueel eigendom </strong></p><p>Het gebruik van de informatie op deze website is gratis zolang u deze informatie niet kopieert, verspreidt of op een andere manier gebruikt of misbruikt. U mag de informatie op deze website alleen hergebruiken volgens de regelingen van het dwingend recht.</p><p>Zonder uitdrukkelijke schriftelijke toestemming van WhatsOnTheMenu is het niet toegestaan tekst, fotomateriaal of andere materialen op deze website her te gebruiken. Het intellectueel eigendom berust bij WhatsOnTheMenu.</p><p><strong>Indien van toepassing: </strong></p><p>Voor de prijzen die op onze website staan, geldt dat wij streven naar een zo zorgvuldig mogelijke weergave van de realiteit en de bedoelde prijzen. Fouten die daarbij ontstaan en herkenbaar zijn als programmeer dan wel typefouten, vormen nooit een aanleiding om een contract dan wel overeenkomst met WhatsOnTheMenu te mogen claimen of te veronderstellen.</p><p>WhatsOnTheMenu streeft naar een zo actueel mogelijke website. Mocht ondanks deze inspanningen de informatie van of de inhoud op <a href="" target="_blank"></a> onvolledig en of onjuist zijn, dan kunnen wij daarvoor geen aansprakelijkheid aanvaarden.</p><p>De informatie en/of producten op deze website worden aangeboden zonder enige vorm van garantie en of aanspraak op juistheid. Wij behouden ons het recht voor om deze materialen te wijzigen, te verwijderen of opnieuw te plaatsen zonder enige voorafgaande mededeling. WhatsOnTheMenu aanvaardt geen aansprakelijkheid voor enige informatie die op websites staat waarnaar wij via hyperlinks verwijzen.</p><p><strong>Wijzigingen </strong></p><p>Mochten deze algemene voorwaarden wijzigen, dan vindt u de meest recente versie van de disclaimer van WhatsOnTheMenu op deze pagina.</p>
                </div>

                <button type="button" name="previous" class="form-register__btn form-register__btn--previous float-left">
                    {{ __('Vorige') }}
                </button>
                <button type="submit" class="form-register__btn  form-register__btn--next form-register__btn--finish float-right">
                    {{ __('Registreren') }}
                </button>
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