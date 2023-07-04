@extends('layouts.base')

@section('contents')
	{{-- Messaggio di conferma cancellazione --}}
	@if (session('delete_success'))
		@php $task = session('delete_success') @endphp
		<div class="alert alert-danger">
			Il Todo "{{ $task->title }}" è stato eliminato
		</div>
	@endif

	<div class="d-flex justify-content-center mt-5">
		<table class="table table-secondary table-striped table-hover">
			<thead>
				<tr class="thead-dark">
					<th>Title</th>
					<th>Details</th>
					<th>Creation Date</th>
					<th>Expire Date</th>
					<th>Actions</th>
					<th>Completed</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($tasks as $task)
					<tr>
						<td>{{ $task->title }}</td>
						<td>{{ $task->details }}</td>
						<td>{{ $task->creation_date }}</td>
						<td>{{ $task->expire_date }}</td>
						<td>
							<a href="{{ route('tasks.show', ['task' => $task->id]) }}" class="btn btn-success btn-sm">View</a>
							<a href="{{ route('tasks.edit', ['task' => $task->id]) }}" class="btn btn-primary btn-sm">Edit</a>
							<form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST" class="d-inline">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger btn-sm">Delete</button>
							</form>
						</td>
						<td>
							<div class="mb-4">
								<label for="done" class="form-label">Done</label>
								<form method="POST" action="{{ route('tasks.toggle_done', ['task' => $task->id]) }}">
									@csrf
									<input type="hidden" name="done" value="0">
									<input type="checkbox" class="form-check-input @error('done') is-invalid @enderror" id="done"
										name="done" value="1" @if (old('done', $task->done)) checked @endif>
									<div class="invalid-feedback">
										@error('done')
											{{ $message }}
										@enderror
									</div>
									<button type="submit" class="btn btn-warning">Update</button>
								</form>
							</div>

						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<a href="{{ route('tasks.create') }}" class="btn btn-primary p-3 my-4">Aggiungi un nuovo to Do -></a>
@endsection
