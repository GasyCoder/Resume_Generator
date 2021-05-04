@extends('base')

@section('main')


<div class="row">
    <div class="col-lg-12 col-xs-6">
        <fieldset>
            <legend>Infos personnelles (1/5)</legend>
                <form method="post" action="{{ route('store_user') }}">
                    @csrf
                    <div class="form-group">
                        <label for="sex">Sexe</label>
                        <select name="sex" id="sex">
                            <option value="M">Masculin</option>
                            <option value="F">Féminin</option>
                        </select>
                    </div>   

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">    
                                <label for="lastname">Nom:</label>
                                <input type="text" class="form-control" value="{{ old('lastname') }}" name="lastname"/>
                                @if ($errors->has('lastname')) 
                                    <span class="help-block"></span>
                                @endif
                               
                            </div>
                         </div>
                     
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="firstname">Prénoms:</label>
                                <input type="text" class="form-control" value="{{ old('firstname') }}" name="firstname"/>
                            </div>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label for="birthday">Date de naissance:</label>
                        <input type="date" class="form-control" name="birthday" id="birthday" />
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="phone">Téléphone:</label>
                                <input type="text" class="form-control" value="{{ old('phone') }}" name="phone" id="phone"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" value="{{ old('email') }}" name="email" id="email"/>
                               
                            </div>
                        </div>
                        <input type="hidden" class="form-control" name="password" id="password" value="{{ Str::random()}}"/>
                    </div>
                    
                    <div class="form-group">
                        <label for="address">Adresse:</label>
                        <input type="text" class="form-control" value="{{ old('addres') }}" name="address" id="address"/>
                    </div>

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="postalcode">Code Postal:</label>
                                <input type="text" class="form-control" value="{{ old('postalcode') }}" name="postalcode" id="postalcode"/>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="city">Ville:</label>
                                <input type="text" class="form-control" value="{{ old('city') }}" name="city"/ id="city">
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="country">Pays:</label>
                                <input type="text" class="form-control" value="{{ old('country') }}" name="country" id="country"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" class="" name="accept" id="accept"/>
                        <label for="accept">Je suis sûr d'envoyer ces informations</label>
                    </div>   

                    <button type="submit" id="nextBtn" class="btn btn-primary" disabled>Suivant</button>
                </form>
        </fieldset>
    </div>
</div>
    
@endsection

@section('customScript')

        

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <script type="text/javascript">
            
            $(function(){
            $('#birthdays').datepicker({
                inline: true,
                //nextText: '&rarr;',
                //prevText: '&larr;',
                showOtherMonths: true,
                //dateFormat: 'dd MM yy',
                dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                //showOn: "button",
                //buttonImage: "img/calendar-blue.png",
                //buttonImageOnly: true,
            });
        });

        </script>

    <script type="text/javascript">
        
    $(document).ready(function () {

        $('#accept').click(function () {

        $('#nextBtn').prop("disabled", !$("#accept").prop("checked")); 
        })
    });
    </script>

@endsection