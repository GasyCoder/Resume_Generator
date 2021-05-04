@extends('base')

@section('main')


<div class="row">
    <div class="col-lg-12">
        <fieldset>
            <legend>Formations (3/5)</legend>
                <form method="post" action="{{ route('store_education', ['user' => Request::route('user_id')]) }}">
                    @csrf
                  
                    <div class="form-group">
                        <label for="school">Lycée / Institut / Université:</label>
                        <input type="text" class="form-control" value="{{ old('school') }}" name="school" id="school"/>
                    </div>

                     <div class="form-group">
                        <input type="checkbox" class="" name="graduated" id="graduated" value="1" />
                        <label for="graduated">Je suis encore en formation</label>
                    </div>  

                    <div class="form-group">
                        <label for="jobtitle">Diplôme:</label>
                        <input type="text" class="form-control" 
                        placeholder="ex: Licence en Marketing & Communication"value="{{ old('degree') }}" name="degree" id="degree"/>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="begin">De:</label>
                                <input type="text" class="form-control" value="{{ old('begin')}}" maxlength="4" name="begin" id="begin" />
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="end">A:</label>
                                <input type="text" class="form-control" value="{{ old('end')}}" maxlength="4" name="end" id="end" />
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    <a class="btn btn-success" href="{{ route('create_skill', ['user_id' => Request::route('user_id') ])}}">Suivant</a>
                </form>
        </fieldset>
    </div>
</div>                  
@endsection



@section('customScript')

    <script type="text/javascript">
        
    $(document).ready(function () {

        $('#graduated').click(function () {

            $('#end').prop("disabled", $("#graduated").prop("checked")); 

        })

        $( "#begin" ).keyup(function() {

            if( !$.isNumeric($('#begin').val()) )
                $('#begin').val("");
        });

         $( "#end" ).keyup(function() {

            if( !$.isNumeric($('#end').val()) )
                $('#end').val("");
        });
    });
    </script>

@endsection