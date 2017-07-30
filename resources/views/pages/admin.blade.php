@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                <button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href='{{ url('addtask') }}'">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> DODAJ TASK</button>
                    <button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href='{{ url('showtask') }}'"> 
           <span class="glyphicon glyphicon-inbox" aria-hidden="true"></span> POKAŻ ZADANIA</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection