@extends('layouts.master')

@section('content')

<h3> Daily goal </h3>

<form method="POST" action="/config/set_daily_goal">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="subject">Hours</label>
    <input type="text" class="form-control" id="hours" name="hours" 
    placeholder="Current {{ $current }} h" >
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>

  @include('layouts.errors')


@endsection