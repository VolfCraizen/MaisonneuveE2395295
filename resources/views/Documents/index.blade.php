@extends('layouts.app')
@section('title', 'Étudiants')

@section('content')

@php $locale = session()->get('locale') @endphp

<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card-header">
            <h5 class="card-title">Documents</h5>
        </div>
        <div class="card-body">
            <table class="table table-stripped">
                <thead>
                    <th>Name</th>
                    <th>File</th>
                    <th>Published</th>
                    <th>By</th>
                </thead>
                <tbody>
                    @foreach($documents as $document)
                    <tr>
                        <td>{{ isset($document->titre[app()->getLocale()]) ? $document->titre[app()->getLocale()] : $document->titre["en"] }}</td>
                        <td>{{ $document->document }}</td>
                        <td>{{ $document->date_de_publication }}</td>
                        <td>{{ $document->user->name }}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <div class="col-md-10">
        <a class="btn btn-primary w-25" href="{{route('document.create')}}">@lang('lang.document_creation')</a>
    </div>
</div>


</div>


@endsection