@extends('base')

@section('main')

<div class="row">
    <div class="col-lg-12">
        <fieldset>
            <legend>Autres / Loisirs / Centre d'intérests (5/5)</legend>
                <form method="post" action="{{ route('store_interest', ['user' => Request::route('user_id')]) }}">
                    @csrf
                  
                    <div class="form-group">
                        <label for="label">Libelle</label>
                        <input type="text" class="form-control" 
                        value="{{ old('label') }}"  placeholder="ex: Football"name="label" id="label"/>
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" class="form-control" 
                        value="{{ old('description') }}" placeholder="ex: Fan du barça!" name="description" id="description"/>
                    </div>

                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    <a class="btn btn-success" href="{{ route('create_preview', ['user_id' => Request::route('user_id') ])}}">Générer aperçu</a>
                </form>
        </fieldset>
    </div>
</div>                  
@endsection