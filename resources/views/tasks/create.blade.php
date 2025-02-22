@extends('layouts.app')

@section('content')
  
<div id="taskModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex justify-center items-center">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-lg w-full">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Create New Task</h2>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium mb-2">Title</label>
                <input type="text" name="title" id="title" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ old('title') }}">
                @error('title')
                    <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                <textarea name="description" id="description" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="4">{{ old('description') }}</textarea>
            </div>
            <div class="flex justify-end space-x-2">
                <a href="{{route('tasks.index')}}">
                    <button type="button"  class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Cancel</button>
                </a>
                <button type="submit"  class=" bg-blue-600  text-white px-4 py-2 rounded-md hover:bg-blue-700 ">Add Task</button>
            </div>
        </form>
    </div>
</div>

@endsection