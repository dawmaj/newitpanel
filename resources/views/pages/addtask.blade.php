@extends('layouts.app')

@section('content')
	  <div class="row">
		  <div class="col-md-2 col-md-offset-1">NAZWA TASKA:</div>
		  <div class="col-md-6"><input class="form-control" type="text" placeholder="Nazwa taska"></div>
	  </div>

	  <div class="row">
		  <div class="col-md-2 col-md-offset-1">DZIAŁ:</div>
		  <div class="col-md-6"><input class="form-control" type="text" placeholder="Dział"></div>
	  </div>
	  <div class="row">
		  <div class="col-md-2 col-md-offset-1">DO NAPRAWY:</div>
		  <div class="col-md-6"><input class="form-control" type="text" placeholder="do naprawy"></div>
	  </div>
	  <div class="row">
		  <div class="col-md-2 col-md-offset-1">KRÓTKI OPIS OBJAWÓW:</div>
		  <div class="col-md-6"><input class="form-control" type="text" placeholder="krótki opis"></div>
	  </div>
	  <button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href='{{ url('addtask') }}'">
       <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> DODAJ TASK</button>

@endsection