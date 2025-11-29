@extends('base')
@section('title','Modification')
@section('titrePage','Mise à jour')
@section('contenu')
<div class="mb-3">
    <form action="{{ route('etudiant.update') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $etudiant->id }}">
        <div class="container">
            <div class="row">
                <div class="form-group col-12">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" value="{{ $etudiant->nom }}" id="nom" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12">
                    <label for="prenoms">Prénoms</label>
                    <input type="text" name="prenoms" value="{{ $etudiant->prenoms }}" id="prenoms" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group" class="col-6">
                        <label for="adresse">Adresse</label>
                        <input type="text" name="adresse" value="{{ $etudiant->adresse }}" id="adresse" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group" class="col-6">
                        <label for="tel">Téléphone</label>
                        <input type="text" name="telephone" value="{{ $etudiant->telephone }}" id="tel" class="form-control">
                    </div>
                </div>
            </div>
            <div>
                <button class="btn btn-success form-control" type="submit">Enregistrer</button>
            </div>
        </div>
      
    </form>
</div>

@endsection