<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
</head>
<body>
    @php $locale = session()->get('locale') @endphp

    <header class="bg-primary p-1 container-fluid mb-5">
        <a href="{{route('home')}}"><h1 class="text-center text-white p-3">@lang('lang.logo')</h1></a>

        <nav class="navbar navbar-expand-sm justify-content-end" aria-label="Third navbar example">
            @auth
                <a class="btn btn-secondary me-3" href="{{route('logout')}}">@lang('lang.logout')</a>
                <a class="btn btn-secondary me-3" href="{{route('etudiant.create')}}">@lang('lang.etudiant_create')</a>
            @else
                <a class="btn btn-secondary me-3" href="{{route('login')}}">@lang('lang.login')</a>
            @endauth

            <a class="btn btn-secondary me-3" href="{{ route('lang', 'en') }}">@lang('lang.en')</a>
            <a class="btn btn-secondary me-3" href="{{ route('lang', 'fr') }}">@lang('lang.fr')</a>

        </nav> 
    </header>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
             {{ session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @yield('content')
    </div>

</body>
<script src="{{asset('js/scripts.js')}}"></script>
</html>