@extends('layouts.app')
@section('content')
<div class="container py-4">
    <h1>Edit Movie</h1>

    <form action="{{ route("movies.update",$movie->id )}}" method="POST">
        @csrf
    @method('PUT')
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example1">Title</label>
                <input type="text" id="form6Example1" class="form-control" name="title" value="{{$movie->title}}" />
            </div>
        </div>
    
    <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Description</label>
        <input type="text" id="form6Example3" class="form-control"name="description" value="{{$movie->description}}" />
    </div>

    <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Genre</label>
        <input type="text" id="form6Example3" class="form-control"name="genre"  value="{{$movie->genre}}" />
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Director</label>
        <input type="text" id="form6Example3" class="form-control"name="director" value="{{$movie->director}}" />
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Release date</label>
        <input type="text" id="form6Example3" class="form-control"name="release_date"  value="{{$movie->release_date}}" />
    </div>


    <div class="form-group mb-4">
        <label class="form-label">Cast</label>
        
        @foreach ($actors as $actor)
  
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="techCheckbox_{{$loop->index}}" value="{{$actor->id}}" name="actors[]"
          {{$movie->actors->contains("id", $actor->id) ? "checked" : ""}}>
          <label class="form-check-label" for="techCheckbox_{{$loop->index}}">{{$actor->name}}</label>
        </div>
          
        @endforeach
  
  
      </div>

    <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>
    </form>
</div>
@endsection