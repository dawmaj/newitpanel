@extends('layouts.app')

@section('content')
	<table class="table">
		<tr>
			<td>Dział</td>
			<td>Problem</td>
			<td>Kto dodał</td>
		</tr>
		<?php
			foreach($tasks as $task){
		?>
		<tr>
			<td><?php echo $task->section ?></td>
			<td><?php echo $task->issue ?></td>
      		<td><?php echo $task->showtask->name ?></td>
		</tr>
		<?php
			}
		?>
	</table>
	<button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href='{{ url('admin') }}'"> 
           <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> POWRÓT</button>
@endsection