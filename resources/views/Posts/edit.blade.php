@extends('layouts.app')
@section('title', 'Edit article')
@section('content')

@if(!$errors->isEmpty())
    <div class="alert alert-danger alert-dismissible" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="d-flex row justify-content-center">
    <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex justify-content-center">
                    <h2 class="card-title">@lang('lang.post_modification')</h2>
                </div>
                <div class="card-body d-flex justify-content-center">
                    <form method="post" class="w-100">
                        @csrf
                        @method('put')


                        <!-- EN -->
               
                        <h2 class="card-title">@lang('lang.en')</h2>
                        <div class="mb-3 d-flex row justify-content-center text-center">
                            <label for="titre_en" class="form-title fs-4">@lang('lang.title') : </label>
                            <input class="w-75" type="text" id="titre_en" name="titre_en" value="{{old('titre_en', $post->titre['en'])}}">
                        </div>
                        <div class="mb-3 d-flex row justify-content-center text-center">
                            <label for="texte_en" class="form-title fs-4">@lang('lang.text') : </label>
                            <textarea class="w-75" name="texte_en" id="" cols="30" rows="10" value="{{old('texte_en', $post->texte['en'])}}"></textarea>
                        </div>

                        <!-- FR -->

                        <h2 class="card-title">@lang('lang.fr')</h2>
                        <div class="mb-3 d-flex row justify-content-center text-center">
                            <label for="titre_fr" class="form-title fs-4">@lang('lang.title') : </label>
                            <input class="w-75" type="text" id="titre_fr" name="titre_fr" value="{{old('titre_fr', isset($post->titre['fr']) ? $post->titre['fr'] : '')}}">
                        </div>
                        <div class="mb-3 d-flex row justify-content-center text-center">
                            <label for="texte_fr" class="form-title fs-4">@lang('lang.text') : </label>
                            <textarea class="w-75" name="texte_fr" id="" cols="30" rows="10" value="{{old('texte_fr', isset($post->texte['fr']) ? $post->texte['fr'] : '')}}"></textarea>
                        </div>

                        <!-- End -->
                        <div class="mb-3 d-flex row justify-content-center mt-5">
                            <button type="submit" class="btn btn-secondary w-50">@lang('lang.edit')</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer d-flex row justify-content-center">

                <a class="btn btn-primary w-75" href="{{route('etudiant.index')}}">@lang('lang.return_etudiant')</a>
                    
                </div>
            </div>
        </div>
    </div>
@endsection