<aside class="w-64 bg-white shadow-lg min-h-screen fixed left-0 top-0">
    <div class="p-6 border-b">
        <h2 class="text-xl font-bold text-green-600">Admin Panel</h2>
    </div>

    <nav class="p-4 space-y-2">
        <a href="{{ route('admin.index') }}" class="block px-4 py-2 rounded-lg hover:bg-green-100 transition">
            <i class="fas fa-chart-line mr-2"></i> Dashboard
        </a>

        <a href="{{ route('admin.users') }}" class="block px-4 py-2 rounded-lg hover:bg-green-100 transition">
            <i class="fas fa-users mr-2"></i> Users
        </a>

        <a href="{{ route('admin.contacts') }}" class="block px-4 py-2 rounded-lg hover:bg-green-100 transition">
            <i class="fas fa-envelope mr-2"></i> contacts
        </a>
    </nav>
</aside>
