@extends('layouts/main')

@section('content')
    @if(count('tasks') > 0)
    <h4 class="text-center mt-5 mb-5">Your tasks</h4>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                <tr onclick="showTask({{$task->id}})">
                    <td>{{$task->title}}</td>
                    <td>{{$task->description}}</td>
                </tr>
                @endforeach
            <tbody>
        </table>
    </div>
    @endif

    @if(count('tasks') == 0)
        <h4 class="text-center mt-5 text-danger">You don´t have any task</h4>
    @endif
@endsection

<script>
    showTask = id => this.location.href = `/task/${id}`;
</script>