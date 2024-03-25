@extends('layouts.app')
@section('title', 'Étudiants')

@section('content')

@php $locale = session()->get('locale') @endphp

    <div class="d-flex row justify-content-center">
    @forelse($etudiants as $etudiant)

        <div class="col-md-10">
            <div class="card mb-5">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">{{$etudiant->nom}}</h4>
                    <h4 class="card-title">@lang('lang.student_id') : {{$etudiant->id}}</h4>
                </div>

                <div class="card-body">
                    <div class="d-flex justify-content-end gap-3">
                        <a class="btn btn-primary" href="{{route('etudiant.show', $etudiant->id)}}">@lang('lang.show')</a>
                        @auth
                        <a class="btn btn-secondary" href="{{route('etudiant.edit', $etudiant->id)}}">@lang('lang.edit')</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>

        @empty
        <div class="alert alert-danger">Il n'y a aucun étudiant</div>

    @endforelse
    <div class="col-md-10">
        <a class="btn btn-primary w-25" href="{{route('etudiant.create')}}">@lang('lang.etudiant_create')</a>
    </div>

</div>

@endsection
