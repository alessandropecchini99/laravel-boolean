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
            <label for="sale_date" class="form-label">Done</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date "
                value="{{ old('sale_date') }}" name="sale_date">
            <div class="invalid-feedback">
                @error('sale_date')
                    {{ $message }}
                @enderror
            </div>
        </div>

        <div class="mb-4">
            <label for="type" class="form-label">Urgent</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                value="{{ old('type') }}">
            <div class="invalid-feedback">
                @error('type')
                    {{ $message }}
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
