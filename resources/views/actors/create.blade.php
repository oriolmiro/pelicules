<html>
<head>
    <title>Crear Actor</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
</head>
<body>
    <h1>Crear un nou Actor</h1>

    <form action="/actors" method="post">
        @csrf
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="birth_date">Data de Naixement:</label>
        <input type="date" id="birth_date" name="birth_date"><br><br>

        <label for="movies">Pelicules:</label>
        <select class="js-example-basic-multiple" id="movies" name="movies[]" multiple="multiple">
            @foreach ($movies as $movie)
                <option value="{{ $movie->id }}">{{ $movie->title }}</option>
            @endforeach
          </select>

<div></div>

        <button type="submit">Crear Actor</button>
    </form>
</body>
</html>