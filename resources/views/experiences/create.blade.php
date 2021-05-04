@extends('base')

@section('main')


<div class="row">
    <div class="col-lg-12">
        <fieldset>
            <legend>Expériences (2/5)</legend>
                <form method="post" action="{{ route('store_experience', ['user' => Request::route('user_id')]) }}">
                    @csrf
                  
                    <div class="form-group">
                        <label for="company">Entreprise:</label>
                        <input type="text" class="form-control" value="{{ old('company') }}" name="company" id="company"/>
                    </div>

                    <div class="form-group">
                        <label for="jobtitle">Poste:</label>
                        <input type="text" class="form-control" value="{{ old('jobtitle') }}" name="jobtitle" id="jobtitle"/>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" class="" name="working" id="working" value="1" />
                        <label for="working">J'y travaille actuellement</label>
                    </div>   


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="begin">De:</label>
                                <input type="text" value="{{ old('begin')}}" required maxlength="4" class="form-control" name="begin" id="begin" />
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="end">A:</label>
                                <input type="text" value="{{ old('end')}}" maxlength="4" class="form-control" name="end" id="end" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="jobdescription">Description</label>
                        <textarea name="jobdescription" id="jobdescription" required class="form-control">{{ old('jobdescription') }}</textarea>
                    </div>   

                    
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    <a class="btn btn-success" href="{{ route('create_education', ['user_id' => Request::route('user_id') ])}}">Suivant</a>
                </form>
        </fieldset>
    </div>
</div>                  
@endsection


@section('customScript')

    <script type="text/javascript">
        
    $(document).ready(function () {

        $('#working').click(function () {

        $('#end').prop("disabled", $("#working").prop("checked")); 
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