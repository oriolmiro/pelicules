@extends('layouts.app')

@section('css-styles')
<style>
    form select {
        width: 100%;
    }
</style>
<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear actor </div>

                <div class="card-body">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection