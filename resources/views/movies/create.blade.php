@extends('layouts.app')
@section('content')
<div class="container py-4">
  
    <div class="row justify-content-center">
        <div class="col-sm-6 justify-content-center">

        <h1>Add Movie!</h1> 

        <form action="{{ route("movies.store") }}" method="POST">
             @csrf
        
        {{-- title input --}}
        
        <div class="form-outline mb-4">
            <div class="form-outline">
                <label class="form-label" for="form6Example1">Title</label>
                <input type="text" id="form6Example1" class="form-control" name="title" />
            </div>
        </div>
        
        {{-- description input --}}
        <div class="form-outline mb-4">
            <label class="form-label" for="form6Example3">Description</label>
            <input type="text" id="form6Example3" class="form-control"name="description" />
        </div>

        {{-- genre input --}}
        <div class="form-outline mb-4">
            <label class="form-label" for="form6Example3">Genre</label>
            <input type="text" id="form6Example3" class="form-control"name="genre" />
        </div>

        {{-- director input --}}
        <div class="form-outline mb-4">
            <label class="form-label" for="form6Example3">Director</label>
            <input type="text" id="form6Example3" class="form-control"name="director" />
        </div>

        {{-- production_company select --}}
        <div class="mb-3">
            <label class="form-label ">Company</label>
            <select class="form-select" name="production_company_id">
              @foreach ($companies as $company )
                <option value=""></option>
                <option value="{{$company->id}}">{{$company->name}}</option>
              @endforeach
            </select>
        </div>

        {{-- release_date input --}}
        <div class="form-outline mb-4">
            <label class="form-label" for="form6Example3">Release date</label>
            <input type="text" id="form6Example3" class="form-control"name="release_date" />
        </div>

        {{-- cast input --}}
        <div class="form-group mb-4">
            <label class="form-label d-block"><h4>Cast</h4></label>
            
            @foreach ($actors as $actor)
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="techCheckbox_{{$loop->index}}" value="{{$actor->id}}" name="actors[]"
                {{in_array($actor->id , []) ? "checked" : ""}}>
                <label class="form-check-label" for="techCheckbox_{{$loop->index}}">{{$actor->name}}</label>
                </div>
            
            @endforeach

        </div>

        <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
    </form>
        </div>
    </div>

  
</div>
@endsection