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

You studied {{ $today_time }} minutes  today!

@endsection