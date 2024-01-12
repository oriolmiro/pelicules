<!DOCTYPE html>
<html>
<head>
    <title>Llistat d'Actors</title>
</head>
<body>
    <h1>Actors</h1>

    <!-- Botó per anar a la vista de crear actor -->
    <a href="{{ route('actors.create') }}" class="btn btn-primary">Crear Nou Actor</a>

    <ul>
        @foreach ($actors as $actor)
            <li>{{ $actor->name }} - {{ $actor->birth_date }}</li>
        @endforeach
    </ul>
</body>
</html>