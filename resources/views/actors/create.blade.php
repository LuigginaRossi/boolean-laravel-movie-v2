@extends('layouts.app')
@section('content')
<div class="container py-4">
    <h1>Add actor</h1>

    <form action="{{ route("actors.store") }}" method="POST">
        @csrf
    
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
            <label class="form-label" for="form6Example1">Name</label>
            <input type="text" id="form6Example1" class="form-control" name="name" />
        </div>
    </div>
    
    <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Surname</label>
        <input type="text" id="form6Example3" class="form-control"name="surname" />
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Date of birth</label>
        <input type="text" id="form6Example3" class="form-control"name="date_of_birth" />
    </div>

    <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
    </form>
</div>
@endsection