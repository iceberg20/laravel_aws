@extends('layouts.master')

@section('content')

	<h1> Register your Study Section </h1>
  <hr>

	<form method="Post" action="/studysections">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="subject">Subject</label>
    <input type="text" class="form-control" id="subject" name="subject" >
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description" >
  </div>
  <div class="form-group">
    <label for="minutes">Time</label>
    <input type="time" class="form-control" id="time" name="time" >
  </div>
  <div class="form-group">
        <p>Date: <input type="date" id="date" class="form-control" name="s_date" ></p>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>

  @include('layouts.errors')

</form>



@endsection

