@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-100 flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Edit Task</h1>

            <form action="{{ route('tasks.update', $task) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                    <input type="text" name="title" id="title" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('title', $task->title) }}" required>
                </div>

                <div>
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                    <textarea name="description" id="description" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description', $task->description) }}</textarea>
                </div>

                <div>
                    <label for="completed" class="block text-gray-700 text-sm font-bold mb-2">Status</label>
                    <select name="completed" id="completed" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="0" {{ $task->completed ? '' : 'selected' }}>Pending</option>
                        <option value="1" {{ $task->completed ? 'selected' : '' }}>Completed</option>
                    </select>
                </div>

                <div>
                    <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Update Task
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection