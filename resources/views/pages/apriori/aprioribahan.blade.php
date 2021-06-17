
<x-app-layout title="Apriori">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            {{ __('Apriori Data Bahan') }}
        </h2>

        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            {{ _("Data Transaksi") }}
        </h4>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Date</th>
                            <th class="px-4 py-3">Bahan</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($dataTransaksi as $key => $value)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                {{ $no++ }}
                            </td>
                            {{--
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full"
                                            src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                            alt="" loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner"
                                            aria-hidden="true"></div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Hans Burger</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                            10x Developer
                                        </p>
                                    </div>
                                </div>
                            </td>
                            comment --}}
                            <td class="px-4 py-3 text-sm">
                                {{ $value['date'] }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $value['bahan'] }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            {{ _("Item Set 1") }}
        </h4>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Bahan</th>
                            <th class="px-4 py-3">Jumlah</th>
                            <th class="px-4 py-3">Support</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($itemSet1 as $key => $value)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                {{ $no++ }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $value['bahan'] }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $value['jumlah'] }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $value['support'] }} %
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            {{ _("Item Set 2") }}
        </h4>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Bahan</th>
                            <th class="px-4 py-3">Jumlah</th>
                            <th class="px-4 py-3">Support</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($itemSet2 as $key => $value)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                {{ $no++ }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $value['variasi1'].", ".$value['variasi2'] }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $value['jumlah'] }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $value['support'] }} %
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @if ($itemSet3 > 0)
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            {{ _("Item Set 3") }}
        </h4>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Bahan</th>
                            <th class="px-4 py-3">Jumlah</th>
                            <th class="px-4 py-3">Support</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($itemSet3 as $key => $value)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                {{ $no++ }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $value['variasi1'].", ".$value['variasi2'].", ".$value['variasi3'] }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $value['jumlah'] }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $value['support'] }} %
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif

        @if ($confidence > 0 && $itemSet3 > 0)
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            {{ _("Confidence") }}
        </h4>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Produk</th>
                            <th class="px-4 py-3">Confidence</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($confidence as $key => $value)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                {{ $no++ }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $value['variasi1']." ".$value['variasi2']." ".$value['variasi3'] }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $value['confidence']." %" }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            {{ _("Rule") }}
        </h4>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Rule</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($confidence as $key => $value)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                {{ $no++ }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ "Jika bahan ".$value['variasi1']." digunakan, kemungkinan juga bahan ".$value['variasi2']." dan bahan ".$value['variasi3']." digunakan pula dengan keyakinan ".$value['confidence']." %" }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @elseif ($confidence > 0)
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            {{ _("Confidence") }}
        </h4>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Produk</th>
                            <th class="px-4 py-3">Confidence</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($confidence as $key => $value)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                {{ $no++ }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $value['variasi1']." ".$value['variasi2'] }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $value['confidence']." %" }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            {{ _("Rule") }}
        </h4>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Rule</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($confidence as $key => $value)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                {{ $no++ }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ "Jika bahan ".$value['variasi1']." digunakan, kemungkinan juga bahan ".$value['variasi2']." digunakan pula dengan keyakinan ".$value['confidence']." %" }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif

    </div>
</x-app-layout>
