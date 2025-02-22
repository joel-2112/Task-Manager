@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Task Manager</h1>

    @if (session('success'))
        <div id="success-message" class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('tasks.create') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 mb-6">
        Add New Task
    </a>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-200 text-gray-600">
                <tr>
                    <th class="py-3 px-4 text-left">ID</th>
                    <th class="py-3 px-4 text-left">Title</th>
                    <th class="py-3 px-4 text-left">Description</th>
                    <th class="py-3 px-4 text-left">Status</th>
                    <th class="py-3 px-4 text-left">Created At</th>
                    <th class="py-3 px-4 text-left">Updated At</th>
                    <th class="py-3 px-4 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4">{{ $task->id }}</td>
                        <td class="py-3 px-4">{{ $task->title }}</td>
                        <td class="py-3 px-4">{{ $task->description ?? 'No description' }}</td>
                        <td class="py-3 px-4">
                            <span class="{{ $task->completed ? 'text-green-600' : 'text-red-600' }}">
                                {{ $task->completed ? 'Completed' : 'Pending' }}
                            </span>
                        </td>
                        <td class="py-3 px-4">{{ $task->created_at->format('Y-m-d H:i:s') }}</td>
                        <td class="py-3 px-4">{{ $task->updated_at->format('Y-m-d H:i:s') }}</td>
                        <td class="py-3 px-4">
                            <a href="{{ route('tasks.edit', $task) }}" class="text-blue-600 hover:text-blue-800 mr-4">
                                Edit
                            </a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Are you sure?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection