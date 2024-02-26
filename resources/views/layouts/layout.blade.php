<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
</head>
<body>
    <header class="bg-primary p-1 container-fluid mb-5">
        <h1 class="text-center text-white p-3">Collège de maisonneuve</h1>
        
        <nav class="navbar navbar-expand-sm justify-content-end" aria-label="Third navbar example">
            <a class="btn btn-secondary me-3" href="{{route('Etudiant.create')}}">Créer un étudiant</a>
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