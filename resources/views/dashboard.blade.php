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
                    <p style="margin-bottom: 20px;">{{ __("You're logged in!") }}</p>
                    <p>Your balance available is $ {{ number_format($wallet->balance ?? 0, 2, ',', '.') }}</p>

                    <hr class="my-4 border-gray-600">

                    <form method="POST" action="{{ route('transfer.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="document_id" class="block text-sm font-medium text-gray-300">Document ID</label>
                            <input type="text" name="document_id" id="document_id" required
                                   class="mt-1 block w-full rounded-md dark:bg-gray-700 border-gray-600 shadow-sm text-white">
                        </div>

                        <div class="mb-4">
                            <label for="amount" class="block text-sm font-medium text-gray-300">Value($)</label>
                            <input type="number" name="amount" id="amount" step="0.01" required
                                   class="mt-1 block w-full rounded-md dark:bg-gray-700 border-gray-600 shadow-sm text-white">
                        </div>

                        <button type="submit"
                                class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                            Enviar
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>