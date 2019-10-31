@extends('layout')

@section('content')

<h1 class="title">{{ $project->title }} </h1>

<div class="content"> {{ $project->description }} </div>
s
<p>

    <a href="/projects/{{ $project->id }}/edit">edit</a>

</p>

@if($project->tasks->count())
    
    <div>

        @foreach ($project->tasks as $task)

            <div>

                <form method="POST" action="/completed-tasks/{{ $task->id }}">

                    @if($task->completed)
                        @method('DELETE')
                    @endif

                    @csrf

                    <label class="checkbox" for="completed">

                        <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>

                            {{ $task->description }}

                    </label>

                </form>

            </div>

        @endforeach

    </div>

@endif

    <div>
        <form method="POST" action="/projects/{{ $project->id }}/tasks">
            @csrf

            <label class="label" for="description">Description</label>

            <div class="control">

                <input type="description" name="description" placeholder="Description">

            </div>

            <button type="submit">Create new task</button>
        </form>
    </div>



@endsection