@extends('layouts.app')

@section('content')
	{{ Form::open(array('url' => '/taskadded', 'method' => 'post')) }}
		{{ csrf_field() }}
		  <div class="row">
			  <div class="col-md-2 col-md-offset-1">NAZWA TASKA:</div>
			  <div class="col-md-6"><input class="form-control" name="issue" type="text" placeholder="Nazwa taska"></div>
		  </div>
		  <div class="row">
        		<div class="col-md-2 col-md-offset-1">DZIAŁ:</div>
        		<div class="col-xs-5 selectContainer">
            		<select class="form-control" name="section">
		                <option>Wybierz dział</option>
		                <option>IT</option>
		                <option>kadry</option>
		                <option>księgowość</option>
		                <option>montoring</option>
            		</select>
        		</div>
    	</div>
		  <!-- <div class="row">
			  <div class="col-md-2 col-md-offset-1">DZIAŁ:</div>
			  <div class="col-md-6"><input class="form-control" name="section" type="text" placeholder="Dział"></div>
		  </div> -->
		  <div class="row">
			  <div class="col-md-2 col-md-offset-1">DO NAPRAWY:</div>
			  <div class="col-md-6"><input class="form-control" name="about" type="text" placeholder="do naprawy"></div>
		  </div>
		  <div class="row">
			  <div class="col-md-2 col-md-offset-1">KRÓTKI OPIS OBJAWÓW:</div>
			  
			  <div class="col-md-6" ><input class="form-control" name="description" type="text" placeholder="krótki opis"></div>
		  </div>
		  <div class="col-md-5 col-md-offset-3">
		  <button type="submit" class="btn btn-primary btn-lg btn-block" name='submit' >
	       <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>DODAJ ZADANIE</button>
	       <button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href='{{ url('showtask') }}'"> 
           <span class="glyphicon glyphicon-inbox" aria-hidden="true"></span> POKAŻ ZADANIA</button>
	      </div>
      </form>
      {{Form::close()}}

@endsection