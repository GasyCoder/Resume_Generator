@extends('base')

@section('main')

<div class="row">
    <div class="col-lg-12">
        <fieldset>
            <legend>Compétences (4/5)</legend>
                <form method="post" action="{{ route('store_skill', ['user' => Request::route('user_id')]) }}">
                    @csrf
                  
                    <div class="form-group">
                        <label for="label">Votre compétence</label>
                        <input type="text" class="form-control" 
                        value="{{ old('label') }}"  placeholder="ex: Français"name="label" id="label"/>
                    </div>

                    <div class="form-group">
                        <label for="jobtitle">Description:</label>
                        <input type="text" class="form-control" 
                        value="{{ old('description') }}" placeholder="ex: Lu, parlé, écrit" name="description" id="description"/>
                    </div>

                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    <a class="btn btn-success" href="{{ route('create_interest', ['user_id' => Request::route('user_id') ])}}">Suivant</a>
                </form>
        </fieldset>
    </div>
</div>                  
@endsection