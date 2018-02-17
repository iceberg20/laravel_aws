@extends('layouts.master')
<style type="text/css">
#subttitle{
	margin-bottom: 5px;
}

#input_id{
	width: 4%;
}
#input_subject{
	width: 11%;
}
</style>
@section('content')
    <div class="container">
      <h3 class="section-title">Study Sections</h3>
      <p id="subttitle" class="lead blog-description">All yours study sections.</p>
      <form action="/search" method="Post">
      	{{ csrf_field() }}
     <!-- Id: <input id="input_id" type="text" name="id"> -->
      Subject: <input id="input_subject" type="text" name="subject">
     <!-- Description: <input type="text">
      Minutes: <input type="text">
      Date: <input type="text"> -->
      <input type="submit">
      </form>
     

    </div>
    @include('studysection.studysection')
@endsection




