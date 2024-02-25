@extends('layouts.app')
@section('content')

<h1>New Task</h1>
<form action="/tasks" method="POST">
    <div class="form-group">
        <label for="description">Task Description
            <input type="text" class="form-control" name="description"/>
        </label>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Create Task</button>
    </div>
</form>
@endsection
