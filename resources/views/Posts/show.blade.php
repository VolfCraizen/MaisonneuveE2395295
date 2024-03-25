@extends('layouts.app')
@section('title', 'Article')


@section('content')


<div class="d-flex row justify-content-center">
    <div class="col-md-10">
        <div class="card mb-5">
            <div class="card-header d-flex justify-content-between">
                <h4 class="card-title">{{isset($post->titre[app()->getLocale()]) ? $post->titre[app()->getLocale()] : $post->titre["en"]}}</h4>
                <h4 class="card-title">{{$post->user->name}}</h4>
            </div>

            <div class="card-body">
                <div class="d-flex row justify-content-center">
                    <p>{{isset($post->texte[app()->getLocale()]) ? $post->texte[app()->getLocale()] : $post->texte["en"]}}</p>
                </div>
            </div>
            <div class="card-footer">
                 @if(auth()->user()->id === $post->user_id)
                    <div class="d-flex justify-content-end gap-3">
                        <a class="btn btn-secondary" href="{{route('post.edit', $post->id)}}">@lang('lang.edit')</a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            @lang('lang.delete')
                        </button>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <a class="btn btn-primary w-75" href="{{route('post.index')}}">@lang('lang.return_post')</a>

</div>



    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog h-100">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5 text-danger" id="deleteModalLabel">@lang('lang.warning')!</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>@lang('lang.warning_delete_post_text1')</p>
            <p>@lang('lang.warning_delete_post_text2')</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">@lang('lang.no')</button>
            <form action="" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-sm btn-danger">@lang('lang.delete')</button>
            </form>
        </div>
        </div>
    </div>
    </div>

@endsection