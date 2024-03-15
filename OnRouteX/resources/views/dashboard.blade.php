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
                    <form method="POST" action="{{ route('bus.search') }}">
                        @csrf
                        <div>
                            <label for="from_address">From:</label>
                            <input type="text" id="from_address" name="from_address" required>
                        </div>
                        <div>
                            <label for="to_address">To:</label>
                            <input type="text" id="to_address" name="to_address" required>
                        </div>
                        <div>
                            <button type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>
                            <a href="{{ route('local.show') }}" class="btn btn-primary">Go to local bus page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
