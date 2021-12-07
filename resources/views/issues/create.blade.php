@extends('app')
@section('content')
    <div class="w-full sm:max-w-md mx-auto mt-6">
        <div class="flex justify-between mb-4">
            <h2 class="text-3xl font-bold">Add New Issue</h2>
        </div>
        <form action="{{ route('issues.store') }}" method="post" class="mb-4 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="mb-4">
                <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                <input class="rounded-md shadow-sm border border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full py-2 px-3 outline-none" id="name" name="name" type="text" required>
            </div>
            <div class="mb-4">
                <label for="priority" class="block font-medium text-sm text-gray-700">Priority</label>
                <select class="appearance-none rounded-md shadow-sm border border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full py-2 px-3 outline-none" id="priority" name="priority">
                    <option value="low">Low</option>
                    <option value="medium">Medium</option>
                    <option value="high">High</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="message" class="block font-medium text-sm text-gray-700">Message</label>
                <input class="rounded-md shadow-sm border border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full py-2 px-3 outline-none" id="message" name="message" type="text" required>
            </div>
            <div>
                @csrf
                <button class="inline-flex px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">Create Issue</button>
            </div>
        </form>
    </div>
@endsection