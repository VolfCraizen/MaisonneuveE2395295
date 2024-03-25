@extends('layouts.app')
@section('title', 'Ajout étudiant')
@section('content')

@php $locale = session()->get('locale') @endphp

<div class="d-flex row justify-content-center">
    <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex justify-content-center">
                    <h2 class="card-title">@lang('lang.welcome')</h2>
                </div>
                <div class="card-body d-flex justify-content-center gap-3">
                    <a class="btn btn-primary w-25" href="{{route('etudiant.index')}}">@lang('lang.etudiant_list')</a>
                    <a class="btn btn-primary w-25" href="{{route('post.index')}}">@lang('lang.post_list')</a>
                    @auth
                        <a class="btn btn-primary w-25" href="{{route('document.index')}}">@lang('lang.document_list')</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
@endsection