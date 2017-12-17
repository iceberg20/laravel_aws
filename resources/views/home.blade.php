@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>You are logged in!</p>
                    
                    Click <a href="{{ route('all') }}">here</a> to view all yours study secions!
                    </br>
                    Or
                    <p>Click <a href="{{ route('create') }}">here</a> to create a new study secions!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
