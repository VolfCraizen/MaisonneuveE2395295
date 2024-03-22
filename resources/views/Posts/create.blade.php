@extends('layouts.app')
@section('title', 'Ajout étudiant')
@section('content')

@php $locale = session()->get('locale') @endphp

<div class="d-flex row justify-content-center">
    <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex justify-content-center">
                    <h2 class="card-title">@lang('lang.etudiant_creation')</h2>
                </div>
                <div class="card-body d-flex justify-content-center">
                    <form method="post" class="w-100">
                        @csrf

                        <!-- EN -->
               
                        <h2 class="card-title">@lang('lang.en')</h2>
                        <div class="mb-3 d-flex row justify-content-center text-center">
                            <label for="titre_en" class="form-title fs-4">@lang('lang.title') : </label>
                            <input class="w-75" type="text" id="titre_en" name="titre_en" value="{{old('titre_en')}}">
                            @if($errors->has('titre_en'))
                            <div class="text-danger mt-2">
                                {{$errors->first('titre_en')}}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3 d-flex row justify-content-center text-center">
                            <label for="texte_en" class="form-title fs-4">@lang('lang.text') : </label>
                            <textarea class="w-75" name="texte_en" id="" cols="30" rows="10" value="{{old('texte_en')}}"></textarea>
                            @if($errors->has('texte_en'))
                            <div class="text-danger mt-2">
                                {{$errors->first('texte_en')}}
                            </div>
                            @endif
                        </div>

                        <!-- FR -->

                        <h2 class="card-title">@lang('lang.fr')</h2>
                        <div class="mb-3 d-flex row justify-content-center text-center">
                            <label for="titre_fr" class="form-title fs-4">@lang('lang.title') : </label>
                            <input class="w-75" type="text" id="titre_fr" name="titre_fr" value="{{old('titre_fr')}}">
                            @if($errors->has('titre_fr'))
                            <div class="text-danger mt-2">
                                {{$errors->first('titre_fr')}}
                            </div>
                            @endif
                        </div>
                        <div class="mb-3 d-flex row justify-content-center text-center">
                            <label for="texte_fr" class="form-title fs-4">@lang('lang.text') : </label>
                            <textarea class="w-75" name="texte_fr" id="" cols="30" rows="10" value="{{old('texte_fr')}}"></textarea>
                            @if($errors->has('texte_fr'))
                            <div class="text-danger mt-2">
                                {{$errors->first('texte_fr')}}
                            </div>
                            @endif
                        </div>

                        <!-- End -->

                        <div class="mb-3 d-flex row justify-content-center mt-5">
                            <button type="submit" class="btn btn-secondary w-50">@lang('lang.create')</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer d-flex row justify-content-center">

                    <a class="btn btn-primary w-75" href="{{route('post.index')}}">@lang('lang.return_post')</a>
                    
                </div>
            </div>
        </div>
    </div>

@endsection