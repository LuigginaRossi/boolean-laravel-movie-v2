@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            @foreach ($movies as $movie )
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">{{$movie->title}}</div>
                        <div class="card-text">{{$movie->description}}</div>
                        <a method='delete' href="{{ route('movies.destroy', $movie->id) }}" class="btn btn-danger">
                            Delete
                        </a>
                        <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary">
                            Show
                        </a>
                        <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-success">
                            Edit
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection