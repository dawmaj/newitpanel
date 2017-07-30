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
@endsection