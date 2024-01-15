@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Actors </div>

                <div class="card-body">
                    <a href="{{ route('actors.create') }}" class="btn btn-primary">Crear Nou Actor</a>

                    <ul>
                        @foreach ($actors as $actor)
                            <li>{{ $actor->name }} - {{ $actor->birth_date }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



