@extends('base')
@section('title','Liste etudiants')
@section('titrePage','Liste des étudiants')
@section('contenu')
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénoms</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Action</th>
            </tr>
      </thead>   
        <tbody>
            @foreach ($etudiant as $item)
                <tr>
                    <td>{{ $item->nom }}</td>
                    <td>{{ $item->prenoms }}</td>
                    <td>{{ $item->telephone }}</td>
                    <td>{{ $item->adresse }}</td>
                    <td>
                        <a href="{{ route('etudiant.modifier',$item->id) }}" class="btn btn-warning">Modifier</a>
                        <button class="btn btn-danger">Supprimer</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection