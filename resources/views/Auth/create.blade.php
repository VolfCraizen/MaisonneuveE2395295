@extends('layouts.layout')
@section('title', 'Ajout étudiant')
@section('content')



<div class="d-flex row justify-content-center">
    <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex justify-content-center">
                    <h2 class="card-title">@lang('lang.login')</h2>
                </div>
                <div class="card-body d-flex justify-content-center">
                    <form method="post" class="w-100">
                        @csrf

                        <div class="mb-3 d-flex row justify-content-center text-center">
                            <label for="email" class="form-title fs-4">@lang('lang.email') : </label>
                            <input class="w-75" type="email" id="email" name="email" value="{{old('email')}}">
                            @if($errors->has('email'))
                            <div class="text-danger mt-2">
                                {{$errors->first('email')}}
                            </div>
                            @endif
                        </div>

                        <div class="mb-3 d-flex row justify-content-center text-center">
                            <label for="password" class="form-title fs-4">@lang('lang.password') : </label>
                            <input class="w-75" type="password" id="password" name="password" value="{{old('password')}}">
                            @if($errors->has('password'))
                            <div class="text-danger mt-2">
                                {{$errors->first('password')}}
                            </div>
                            @endif
                        </div>

                        <div class="mb-3 d-flex row justify-content-center mt-5">
                            <button type="submit" class="btn btn-secondary w-50">@lang('lang.login')</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer d-flex row justify-content-center">

                    <a class="btn btn-primary w-75" href="{{route('etudiant.index')}}">@lang('lang.return_home')</a>
                    
                </div>
            </div>
        </div>
    </div>

@endsection