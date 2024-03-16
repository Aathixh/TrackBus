<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <head>
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    </head>
    
</head>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('bus.search') }}">
                        @csrf
                        <div class="form-control">
                            <input type="text" id="from_address" name="from_address" required>
                            <label for="from_address">
                                <span style="transition-delay:0ms">F</span>
                                <span style="transition-delay:50ms">R</span>
                                <span style="transition-delay:100ms">O</span>
                                <span style="transition-delay:150ms">M</span>
                                <span style="transition-delay:200ms">:</span>
                            </label>
                        </div>
                        <div class="form-control">
                            <input type="text" id="to_address" name="to_address" required>
                            <label for="to_address">
                                <span style="transition-delay:0ms">T</span>
                                <span style="transition-delay:50ms">O</span>
                                <span style="transition-delay:100ms">:</span>
                            </label>
                        </div>
                        <div>
                            <button type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div id = 'localpage' class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>
                        <a href="{{ route('local.show') }}" class="btn btn-primary"><button>Go to local bus page</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
