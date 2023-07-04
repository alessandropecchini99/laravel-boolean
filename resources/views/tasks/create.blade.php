@extends('layouts.base')

@section('contents')
	<h1>Add new Todo:</h1>

	<a class="btn btn-primary" href="{{ route('tasks.index') }}">View</a>


	<form class="mt-4" method="POST" action="{{ route('tasks.store') }}">
		@csrf

		<div class="mb-4">
			<label for="title" class="form-label">Title</label>
			<input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
				value="{{ old('title') }}">
			<div class="invalid-feedback">
				@error('title')
					{{ $message }}
				@enderror
			</div>
		</div>

		<div class="mb-4">
			<label for="details" class="form-label">Details</label>
			<textarea class="form-control @error('details') is-invalid @enderror" id="details" rows="3" name="details">
        {{ old('details') }}
        </textarea>
		</div>

		<div class="mb-4">
			<label for="image" class="form-label">Image</label>
			<input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image"
				value="{{ old('image') }}">
			<div class="invalid-feedback">
				@error('image')
					{{ $message }}
				@enderror
			</div>
		</div>

		<div class="mb-4">
			<label for="creation-date" class="form-label">Creation Date</label>
			<input type="text" class="form-control @error('creation-date') is-invalid @enderror" id="creation-date"
				name="creation-date" value="{{ old('creation-date') }}">
			<div class="invalid-feedback">
				@error('creation-date')
					{{ $message }}
				@enderror
			</div>
		</div>

		<div class="mb-4">
			<label for="series" class="form-label">Expire Date</label>
			<input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series"
				value="{{ old('series') }}">
			<div class="invalid-feedback">
				@error('series')
					{{ $message }}
				@enderror
			</div>
		</div>

		<div class="mb-4">
			<label for="done" class="form-check-label">Done</label>
			<input type="hidden" name="done" value="0">
			<input type="checkbox" class="form-check-input @error('done') is-invalid @enderror" id="done" name="done"
				value="1" {{ old('done') ? 'checked' : '' }}>
			<div class="invalid-feedback">
				@error('done')
					{{ $message }}
				@enderror
			</div>
		</div>

		<div class="mb-4">
			<label for="urgent" class="form-check-label">Urgent</label>
			<input type="hidden" name="urgent" value="0">
			<input type="checkbox" class="form-check-input @error('urgent') is-invalid @enderror" id="urgent" name="urgent"
				value="1" {{ old('urgent') ? 'checked' : '' }}>
			<div class="invalid-feedback">
				@error('urgent')
					{{ $message }}
				@enderror
			</div>
		</div>


		<button type="submit" class="btn btn-primary">Save</button>
	</form>
@endsection
