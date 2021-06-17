<x-app-layout title="Detail Produk">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            {{ __('Detail Produk') }}
        </h2>

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800 mb-12">
            <form method="POST" action="{{ route('produk.update', $produk->id) }}">
                {{ csrf_field() }}
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        Nama Produk
                    </span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" name="namaproduk" placeholder="Nama Produk" value="{{ $produk->namaproduk }}" />
                </label>

                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        Kategori
                    </span>
                    <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="kategori_id" placeholder="">
                        @foreach ($kategori as $item)
                        <option value="{{ $item->id }}" {{ ( $item->id == $produk->kategori_id) ? 'selected' : '' }}>{{ $item->kategori }}</option>
                        @endforeach
                    </select>
                </label>

                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        Varian
                    </span>
                    <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="varian_id" placeholder="">
                        @foreach ($varian as $item)
                        <option value="{{ $item->id }}" {{ ( $item->id == $produk->varian_id) ? 'selected' : '' }}> {{ $item->varian }} </option>
                        @endforeach
                    </select>
                </label>

                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Harga</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" name="harga" placeholder="Harga" value="{{ $produk->harga }}" />
                </label>

                <div class="flex flex-col mt-6 mb-2 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row dark:bg-gray-800">
                    <button type="submit" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        Simpan
                    </button>

                    <a type="button" href="{{ route('produk') }}" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                        Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
