@extends('admin.layout.layout')

@section('title', 'Users Management')

@section('content')
    <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow p-6">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Users</h1>

        <div id="usersContainer" class="space-y-3">
            <!-- users will be rendered here -->
        </div>

        <div id="usersMessage" class="mt-4 text-center text-sm text-red-500"></div>
    </div>
@endsection

@section('scripts')
    @vite('resources/js/admin/index.js')
@endsection
