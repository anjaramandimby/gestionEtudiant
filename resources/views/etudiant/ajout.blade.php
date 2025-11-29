@extends('base')
@section('title','Ajout etudiant')
@section('titrePage','Nouveau')
@section('contenu')
<div class="mb-3">
    <form action="{{ route('etudiant.add') }}" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="form-group col-12">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12">
                    <label for="prenoms">Prénoms</label>
                    <input type="text" name="prenoms" id="prenoms" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group" class="col-6">
                        <label for="adresse">Adresse</label>
                        <input type="text" name="adresse" id="adresse" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group" class="col-6">
                        <label for="tel">Téléphone</label>
                        <input type="text" name="telephone" id="tel" class="form-control">
                    </div>
                </div>
            </div>
            <div>
                <button class="btn btn-primary form-control" type="submit">Ajouter</button>
            </div>
        </div>
      
    </form>
</div>

@endsection