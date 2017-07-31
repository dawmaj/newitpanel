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
        		<div class="col-xs-2 selectContainer">
            		<select class="form-control" name="section">
		                <option value ="">Wybierz dział</option>
		                <option value ="IT">IT</option>
		                <option value ="KADRY">kadry</option>
		                <option value ="KSIĘGOWOŚĆ">księgowość</option>
		                <option value ="MONITORING">montoring</option>
            		</select>
        		</div>
    	</div>
    	<div class="row">
        		<div class="col-md-2 col-md-offset-1">DEADLINE (w dniach)</div>
        		<div class="col-xs-2 selectContainer">
            		<select class="form-control" name="deadline">
            			<option value ="0">0</option>
		                <option value ="1">1</option>
		                <option value ="2">2</option>
		                <option value ="3">3</option>
		                <option value ="4">4</option>
		                <option value ="5">5</option>
		                <option value ="6">6</option>
		                <option value ="7">7</option>
		                <option value ="8">8</option>
		                <option value ="9">9</option>
		                <option value ="10">10</option>
		                <option value ="11">11</option>
		                <option value ="12">12</option>
		                <option value ="13">13</option>
		                <option value ="14">14</option>
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