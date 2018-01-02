@extends('layouts.master')


@section('content')
<h3> Report </h3>

<?php 
	isset($set_config) || $set_config = '0';
?>

@if($goal_configured)
	Your Daily goal: {{ $text_goal }}	
@else
	Please set your daily goal <a href="/config">here.</a>
@endif


</br>
</br>
<h3> Hours studied </h3>

@if($today_time_text == 'not' )
<p>You did <span style='color:red;font-weight:bold'>not</span> study today!</p>
@else
<p>You studied <span style='color:#07B029;font-weight:bold'> {{ $today_time_text }} </span> today!
@endif

@endsection