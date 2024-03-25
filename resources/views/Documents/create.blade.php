@extends('layouts.app')
@section('title', 'Ajout étudiant')
@section('content')

@php $locale = session()->get('locale') @endphp

<div class="d-flex row justify-content-center">
    <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex justify-content-center">
                    <h2 class="card-title">@lang('lang.document_creation')</h2>
                </div>
                <div class="card-body d-flex justify-content-center">
                    <form method="post" class="w-100" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3 d-flex row justify-content-center text-center">
                            <label for="titre_en" class="form-title fs-4">@lang('lang.title_en') : </label>
                            <input class="w-75" type="text" id="titre_en" name="titre_en" value="{{old('titre_en')}}">
                            @if($errors->has('titre_en'))
                            <div class="text-danger mt-2">
                                {{$errors->first('titre_en')}}
                            </div>
                            @endif
                        </div>

                        <div class="mb-3 d-flex row justify-content-center text-center">
                            <label for="titre_fr" class="form-title fs-4">@lang('lang.title_fr') : </label>
                            <input class="w-75" type="text" id="titre_fr" name="titre_fr" value="{{old('titre_fr')}}">
                            @if($errors->has('titre_fr'))
                            <div class="text-danger mt-2">
                                {{$errors->first('titre_fr')}}
                            </div>
                            @endif
                        </div>

                        <div class="mb-3 d-flex row justify-content-center text-center">
                            <input type="file" name="document" id="inputFile">
                            @if($errors->has('document'))
                            <div class="text-danger mt-2">
                                {{$errors->first('document')}}
                            </div>
                            @endif
                        </div>
  

                        <div class="mb-3 d-flex row justify-content-center mt-5">
                            <button type="submit" class="btn btn-secondary w-50">@lang('lang.create')</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer d-flex row justify-content-center">

                    <a class="btn btn-primary w-75" href="{{route('post.index')}}">@lang('lang.return_document')</a>
                    
                </div>
            </div>
        </div>
    </div>

@endsection