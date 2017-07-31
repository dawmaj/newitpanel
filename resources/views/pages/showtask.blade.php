@extends('layouts.app')

@section('content')
	<table class="table">
		<tr class="active">
			<td>Dział</td>
			<td>Problem</td>
			<td>Przedmiot</td>
			<td>Objawy</td>
			<td>Kto dodał</td>
			<td>Deadline</td>
		</tr>
		<?php
			foreach($tasks as $task){
		?>
		<tr>
			<td><?php echo $task->section ?></td>
			<td><?php echo $task->issue ?></td>
			<td><?php echo $task->about ?></td>
			<td><?php echo $task->description ?></td>
      		<td><?php echo $task->user->name ?></td>
      		<td><?php echo $task->deadline ?></td>
		</tr>
		<?php
			}
		?>
	</table>
	<button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href='{{ url('admin') }}'"> 
           <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> POWRÓT</button>
@endsection