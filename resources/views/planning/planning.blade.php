@extends('layouts.master')

@section('content')

	<h1 id="title-plan"> Plans </h1>



<div class="card">
  <h3 class="card-header">Concurso ITEP</h3>
  <div class="container incard">
	  <div class="card-block">
		<p> <span class="t2"> Study Time: </span> 4h/dia </p> 
		<p> <span class="t2"> Disciplinas: </span> Informática, Português. </p>
		<p> <span class="t2"> Final Date: </span> 06/01/2017 </p>
	    <a style="margin-bottom: 30px;" href="#">Edit</a>
	  </div>
	</div>
</div>

<div class="card">
  <h3 class="card-header">Prova de Matemática</h3>
  <div class="container incard">
	  <div class="card-block">
		<p> <span class="t2"> Study Time: </span> 4h/dia </p> 
		<p> <span class="t2"> Disciplinas: </span> Informática, Português. </p>
		<p> <span class="t2"> Final Date: </span> 06/01/2017 </p>
	    <a style="margin-bottom: 30px;" href="#">Edit</a>
	  </div>
	</div>
</div>

</br>
</br>
<button type="button" class="btn btn-default" aria-label="Left Align">
	Add Plan
  <span class="fa fa-plus" aria-hidden="true"></span>
</button>
	

@endsection
