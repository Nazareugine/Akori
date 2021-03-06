<div x-data="{ modalTambahForm:false }">
    <button x-on:click="modalTambahForm = !modalTambahForm" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
        {{ __('Tambah Varian') }}
    </button>

    <div x-show="modalTambahForm" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
        <!-- Modal -->
        <div x-show="modalTambahForm" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0  transform translate-y-1/2" @click.away="modalTambahForm = !modalTambahForm" @keydown.escape="modalTambahForm = !modalTambahForm" class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl">
            <!-- Modal body -->
            <div class="mt-4 mb-6">
                <!-- Modal title -->
                <p class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">
                    {{ __('Tambah Varian') }}
                </p>
            </div>

            <form method="POST" action="{{ route('varian.store') }}">
                {{ csrf_field() }}
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        Nama Varian
                    </span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" name="kategori" placeholder="Nama Varian" />
                </label>

                <footer class="flex flex-col items-center justify-end px-6 py-3 -mx-6 mt-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row  dark:bg-gray-800">
                    <button type="submit" x-on:click="modalTambahForm = !modalTambahForm" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        Tambah
                    </button>

                    <button type="button" x-on:click="modalTambahForm = !modalTambahForm" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                        Kembali
                    </button>
                </footer>
            </form>
        </div>
    </div>
</div>
