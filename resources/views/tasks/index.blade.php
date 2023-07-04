@extends('layouts.base')

@section('contents')
    <div class="d-flex justify-content-center mt-5">
        <table class="table table-secondary table-striped table-hover">
            <thead>
            <tr class="thead-dark">
                <th>Title</th>
                <th>Details</th>
                <th>Creation Date</th>
                <th>Expire Date</th>
                <th>Actions</th>
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
                        <a href="{{ route('tasks.edit', ['task' => $task->id]) }}"
                           class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST"
                              class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
