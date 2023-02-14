@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
        @foreach ($movies as $movie )
        <div class="col-sm-3 g-4">
            <div class="card">
                <div class="card-body text-center">
                    <div class="card-title">Title: <h4>{{$movie->title}}</h4></div>
                    <div class="card-text">Description: <h4>{{$movie->description}}</h4></div>
                    <div class="py-4">
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
            </div>
        </div>
        @endforeach
       
    </div>
</div>
@endsection