<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
            <div class="hero-section">
            <div>
                <p style="color: #6251CD">Start sharing your thoughts with the world</p>
                <div class="cta-button" style="padding-right: 20px">
                    <a href="{{ route('blogs.index') }}" class="btn btn-primary">Read Blogs</a>
                    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Add Blogs</a>
                </div>
            </div>
        </div>
</x-app-layout>
