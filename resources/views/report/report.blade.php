@extends('layouts.master')


@section('content')
<h2> Report </h2>


Your Daily goal: {{ $text_goal }}

<?php 
	isset($set_config) || $set_config = '0';
?>
@if($set_config)
<a href="/config">here.</a>
@endif


@endsection