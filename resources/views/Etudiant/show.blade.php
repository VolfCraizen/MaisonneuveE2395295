@extends('layouts.layout')
@section('title', 'Étudiants')


@section('content')

<div class="d-flex row justify-content-center">
    <div class="col-md-10">
        <div class="card mb-5">
            <div class="card-header d-flex justify-content-between">
                <h4 class="card-title">{{$etudiant->nom}}</h4>
                <h4 class="card-title">Numéro d'étudiant : {{$etudiant->id}}</h4>
            </div>

            <div class="card-body">
                <div class="d-flex row justify-content-center">
                    <p><strong>Adresse : </strong>{{$etudiant->adresse}}</p>
                    <p><strong>Telephone : </strong>{{$etudiant->telephone}}</p>
                    <p><strong>Email : </strong>{{$etudiant->adresse}}</p>
                    <p><strong>Date de naissance : </strong>{{$etudiant->adresse}}</p>
                    <p><strong>Ville : </strong>{{$etudiant->ville->nom}}</p>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-end gap-3">
                    <a class="btn btn-secondary" href="{{route('etudiant.edit', $etudiant->id)}}">Modifier</a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>

    <a class="btn btn-primary w-25" href="{{route('etudiant.index')}}">Retour à la liste d'étudiants</a>

</div>



    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog h-100">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5 text-danger" id="deleteModalLabel">Warning!</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Voulez-vous supprimer cette étudiant? </p>
            <p>Ils seront supprimer de manière permanente.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Non</button>
            <form action="" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
            </form>
        </div>
        </div>
    </div>
    </div>

@endsection