<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Search Results') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th>Sl.no</th>
                            <th>Name</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Date</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($buses as $index => $bus)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $bus->name }}</td>
                                <td>{{ $bus->from_address }}</td>
                                <td>{{ $bus->to_address }}</td>
                                <td>{{ $bus->date }}</td>
                                <td>{{ $bus->price }}</td>
                                <td>
                                    <a href="{{ route('location.show', $bus->id) }}" class="btn btn-primary">Book</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>