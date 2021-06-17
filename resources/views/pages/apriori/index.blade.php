<x-app-layout title="Apriori">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            {{ __('Apriori') }}
        </h2>

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <form method="POST" action="{{ route('apriori.create') }}">
                {{ csrf_field() }}
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Pilih Proses Apriori</span>
                    <select class="block w-2/4 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="proses">
                        <option selected hidden>Pilih proses</option>
                        <option value="bahan">Bahan</option>
                        <option value="produk">Produk</option>
                    </select>
                </label>
                <label class="block text-sm mt-4">
                    <span class="text-gray-700 dark:text-gray-400">Pilih Tanggal</span>
                    <input class="block w-2/4 mr-4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="text" name="daterange" />
                </label>

                <label class="block text-sm mt-4">
                    <div class="flex space-x-4">
                        <span class="text-gray-700 dark:text-gray-400 w-2/4">Minimal Support</span>
                        <span class="text-gray-700 dark:text-gray-400 w-2/4">Minimal Confidence</span>
                    </div>
                    <div class="flex justify-between space-x-4">
                        <input class="block w-2/4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Min Support" name="minSupport" />

                        <input class="block w-2/4 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Min Confidence" name="minConfidence" />
                    </div>
                </label>

                <div class="flex flex-col mt-8 mb-2 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row dark:bg-gray-800">
                    <button type="submit" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        Proses
                    </button>
                </div>
            </form>
        </div>
    </div>
<script>
    $(function() {
        $('input[name="daterange"]').daterangepicker({
            'applyClass' : 'text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple',

            'cancelClass' : 'text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray',
            locale: {
                applyLabel: 'Pilih',
                cancelLabel: 'Batal',
                format: 'DD/MM/YYYY',
                daysOfWeek: [
                    "Min",
                    "Sen",
                    "Sel",
                    "Rab",
                    "Kam",
                    "Jum",
                    "Sab"
                ],
                monthNames: [
                    "Januari",
                    "Februari",
                    "Maret",
                    "April",
                    "Mei",
                    "Juni",
                    "Juli",
                    "Agustus",
                    "September",
                    "October",
                    "November",
                    "December"
                ]
            }
        })
    });
</script>

</x-app-layout>
