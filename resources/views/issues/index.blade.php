@extends('app')
@section('content')
    <div class="w-full sm:max-w-md mx-auto mt-6">
        <div class="flex justify-between mb-4">
            <h2 class="text-3xl font-bold">Issues</h2>
            <a href="{{ route('issues.create') }}" class="inline-flex px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">Add New</a>
        </div>
        @foreach($issues as $issue)
            <div class="mb-4 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <a href="{{ route('issues.edit', $issue->id) }}" class="text-xl font-semibold inline-block">{{ $issue->name }}</a>
                <div class="mt-2 flex justify-between">
                    <div>
                        <span class="uppercase text-xs text-gray-700 mr-2 inline-block">{{ $issue->priority }}</span>
                        <span class="uppercase text-xs text-gray-700">{{ $issue->created_at->diffForHumans() }}</span>
                    </div>
                    <div>
                        <form action="{{ route('issues.destroy', $issue->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="uppercase text-xs text-indigo-500 inline-block">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection