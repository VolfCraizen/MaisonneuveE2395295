@extends('layouts.app')
@section('title', 'Étudiant')


@section('content')

<div class="d-flex row justify-content-center">
    <div class="col-md-10">
        <div class="card mb-5">
            <div class="card-header d-flex justify-content-between">
                <h4 class="card-title">{{$etudiant->nom}}</h4>
                <h4 class="card-title">@lang('lang.student_id') : {{$etudiant->id}}</h4>
            </div>

            <div class="card-body">
                <div class="d-flex row justify-content-center">
                    <p><strong>@lang('lang.adress') : </strong>{{$etudiant->adresse}}</p>
                    <p><strong>@lang('lang.phone') : </strong>{{$etudiant->telephone}}</p>
                    <p><strong>@lang('lang.email') : </strong>{{$etudiant->adresse}}</p>
                    <p><strong>@lang('lang.DoB') : </strong>{{$etudiant->adresse}}</p>
                    <p><strong>@lang('lang.city') : </strong>{{$etudiant->ville->nom}}</p>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-end gap-3">
                    <a class="btn btn-secondary" href="{{route('etudiant.edit', $etudiant->id)}}">@lang('lang.edit')</a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        @lang('lang.delete')
                    </button>
                </div>
            </div>
        </div>
    </div>

    <a class="btn btn-primary w-75" href="{{route('etudiant.index')}}">@lang('lang.return_etudiant')</a>

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
            <p>@lang('lang.warning_delete_student_text1')</p>
            <p>@lang('lang.warning_delete_student_text2')</p>
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