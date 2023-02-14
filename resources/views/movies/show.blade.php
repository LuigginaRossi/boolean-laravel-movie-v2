@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">{{$movie->title}}</div>
                    <div class="card-text">{{$movie->description}}</div>
                    <div class="card-text">{{$movie->genre}}</div>
                    <div class="card-text">{{$movie->director}}</div>
                    <div class="card-text">{{$movie->release_date}}</div>
                    <div class="card-title">Actor:
                        @foreach ($movie->actors as $actor)
                          <span class="badge rounded-pill text-bg-secondary">{{ $actor->name }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection