@extends('layouts.master')

@section('content')

	<h3> Plans </h3>

<div class="card">
  <h5 class="card-header">Concurso ITEP</h3>
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
  <h5 class="card-header">Prova de Matemática</h3>
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


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p> asdasdas </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

	

@endsection
