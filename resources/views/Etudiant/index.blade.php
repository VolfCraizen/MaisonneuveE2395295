@extends('layouts.layout')
@section('title', 'Étudiants')


@section('content')

    <div class="d-flex row justify-content-center">
    @forelse($etudiants as $etudiant)

        <div class="col-md-10">
            <div class="card mb-5">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">{{$etudiant->nom}}</h4>
                    <h4 class="card-title">Numéro d'étudiant : {{$etudiant->id}}</h4>
                </div>

                <div class="card-body">
                    <div class="d-flex justify-content-end gap-3">
                        <a class="btn btn-primary" href="{{route('etudiant.show', $etudiant->id)}}">Voir</a>
                        {{-- <a class="btn btn-secondary" href="{{route('etudiant.edit', $etudiant->id)}}">Modifier</a> --}}
                    </div>
                </div>
            </div>
        </div>

        @empty
        <div class="alert alert-danger">Il n'y a aucun étudiant</div>

    @endforelse
</div>

@endsection
