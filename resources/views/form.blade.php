@extends('layouts.app')

@section('title', isset($task)? 'Edit Task': 'Add Task')

@section('styles')
 <style>
    .error-msg{
        color: red;
        font-size: 0.8rem;
    }
 </style>
@endsection

@section('content')
{{-- {{ $errors }} --}}
    <form action="{{  isset($task)? route('tasks.update', ['task' => $task->id]):route('tasks.store') }}" method="POST">
     @csrf
     @isset($task)
         @method('PUT')
     @endisset
     {{-- cross side request forgering --}}
     <div>
        <label for="title">
            Title
        </label>
        <input type="text" name="title" id="title" value="{{ $task->title ?? old('title') }}">
        @error('title')
            <p class="error-msg">{{ $message }}</p>
        @enderror
     </div>

     <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" rows="5">{{$task->description ??  old('description') }}</textarea>
        @error('description')
            <p class="error-msg">{{ $message }}</p>
        @enderror
     </div>

     <div>
        <label for="long_description">Description</label>
        <textarea name="long_description" id="long_description" rows="10">{{$task->long_description ??  old('long_description') }}</textarea>
        @error('long_description')
            <p class="error-msg">{{ $message }}</p>
        @enderror
     </div>

     <div>
        <button type="submit">
            @isset($task)
                Update Task       
            @else
                Add Task
            @endisset
            </button>
     </div>
    </form>

@endsection