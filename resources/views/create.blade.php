@extends('layouts.app')

@section('title', 'Add a Task')

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
    <form action="{{ route('tasks.store') }}" method="POST">
     @csrf
     {{-- cross side request forgering --}}
     <div>
        <label for="title">
            Title
        </label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
        @error('title')
            <p class="error-msg">{{ $message }}</p>
        @enderror
     </div>

     <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" rows="5">{{ old('description') }}</textarea>
        @error('description')
            <p class="error-msg">{{ $message }}</p>
        @enderror
     </div>

     <div>
        <label for="long_description">Description</label>
        <textarea name="long_description" id="long_description" rows="10">{{ old('long_description') }}</textarea>
        @error('long_description')
            <p class="error-msg">{{ $message }}</p>
        @enderror
     </div>

     <div>
        <button type="submit">Add Task</button>
     </div>
    </form>

@endsection