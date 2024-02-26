@extends('layouts.layout')
@section('title', 'Ajout étudiant')
@section('content')



<div class="d-flex row justify-content-center">
    <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex justify-content-center">
                    <h2 class="card-title">Création d'un étudiant</h2>
                </div>
                <div class="card-body d-flex justify-content-center">
                    <form method="post" class="w-100">
                        @csrf
                        <div class="mb-3 d-flex row justify-content-center text-center">
                            <label for="nom" class="form-title fs-4">Nom : </label>
                            <input class="w-75" type="text" id="nom" name="nom" value="{{old('nom')}}">
                            @if($errors->has('nom'))
                            <div class="text-danger mt-2">
                                {{$errors->first('nom')}}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3 d-flex row justify-content-center text-center">
                            <label for="adresse" class="form-title fs-4">Adresse : </label>
                            <input class="w-75" type="text" id="adresse" name="adresse" value="{{old('adresse')}}">
                            @if($errors->has('adresse'))
                            <div class="text-danger mt-2">
                                {{$errors->first('adresse')}}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3 d-flex row justify-content-center text-center">
                            <label for="telephone" class="form-title fs-4">Telephone : </label>
                            <input class="w-75" type="text" id="telephone" name="telephone" value="{{old('telephone')}}">
                            @if($errors->has('telephone'))
                            <div class="text-danger mt-2">
                                {{$errors->first('telephone')}}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3 d-flex row justify-content-center text-center">
                            <label for="email" class="form-title fs-4">Email : </label>
                            <input class="w-75" type="email" id="email" name="email" value="{{old('email')}}">
                            @if($errors->has('email'))
                            <div class="text-danger mt-2">
                                {{$errors->first('email')}}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3 d-flex row justify-content-center text-center">
                            <label for="date_de_naissance" class="form-title fs-4">Date de naissance : </label>
                            <input class="w-75" type="date" id="date_de_naissance" name="date_de_naissance" value="{{old('date_de_naissance')}}">
                            @if($errors->has('date_de_naissance'))
                            <div class="text-danger mt-2">
                                {{$errors->first('date_de_naissance')}}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3 d-flex row justify-content-center text-center">
                            <label for="ville_id" class="form-title fs-4">Ville : </label>
                            <select class="w-75" name="ville_id" id="ville_id">
                                <option selected>Veuillez choisir une ville</option>
                                @foreach($villes as $ville)
                                    <option value="{{$ville->id}}">{{$ville->nom}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('ville_id'))
                            <div class="text-danger mt-2">
                                {{$errors->first('ville_id')}}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3 d-flex row justify-content-center mt-5">
                            <button type="submit" class="btn btn-secondary w-50">Créer</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer d-flex row justify-content-center">

                    <a class="btn btn-primary w-75" href="{{route('Etudiant.index')}}">Retour à la liste d'étudiants</a>
                    
                </div>
            </div>
        </div>
    </div>

@endsection