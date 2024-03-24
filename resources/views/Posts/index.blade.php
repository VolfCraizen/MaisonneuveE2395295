@extends('layouts.app')
@section('title', 'Étudiants')

@section('content')

@php $locale = session()->get('locale') @endphp

    <div class="d-flex row justify-content-center">
    @forelse($posts as $post)

        <div class="col-md-10">
            <div class="card mb-5">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">{{isset($post->titre[app()->getLocale()]) ? $post->titre[$locale] : $post->titre["en"]}}</h4>
                    <h4 class="card-title">@lang('lang.author') : {{$post->user_id}}</h4>
                </div>

                <div class="card-body">
                    <div class="d-flex justify-content-center gap-3">

                        <p>{{isset($post->texte[app()->getLocale()]) ? $post->texte[$locale] : $post->texte["en"]}}</p>

                        @auth
                        
                        @endauth
                    </div>
                </div>
            </div>
        </div>

        @empty
        <div class="alert alert-danger">Il n'y a aucun étudiant</div>

    @endforelse
    <div>
        {{ $posts }}
        <a class="btn btn-primary w-25" href="{{route('post.create')}}">@lang('lang.post_create')</a>
    </div>

</div>

@endsection