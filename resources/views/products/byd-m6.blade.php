@extends('layouts.app')

@section('title', 'BYD M6')

@section('content')

<!-- ==========================
        HERO DETAIL
========================== -->

<section class="pt-32 pb-20 bg-gradient-to-br from-violet-50 via-white to-purple-50">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Tombol Kembali -->
        <a href="/"
            class="inline-flex items-center gap-2 text-purple-600 hover:text-purple-700 font-medium mb-6 sm:mb-10 transition">

            ← Kembali ke Beranda

        </a>

        <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            <!-- FOTO -->
            <div class="relative">

                <div
                    class="absolute inset-4 sm:inset-0 bg-purple-100 rounded-full blur-3xl opacity-40">
                </div>

                <img
                    src="{{ asset('images/products/byd-M6.webp') }}"
                    alt="BYD M6"
                    class="relative w-full max-w-xl mx-auto drop-shadow-2xl
                       hover:scale-105 transition duration-500">

            </div>

            <!-- INFORMASI -->
            <div>

                <span
                    class="inline-flex bg-purple-100 text-purple-700 px-3 sm:px-4 py-2 rounded-full text-xs sm:text-sm font-semibold">

                    🚐 MPV Listrik

                </span>

                <h1
                    class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-gray-900 mt-5 sm:mt-6">

                    BYD M6

                </h1>

                <p
                    class="text-base sm:text-lg text-gray-600 mt-5 sm:mt-6 leading-7 sm:leading-8">

                    BYD M6 merupakan MPV listrik keluarga yang menawarkan kabin luas,
                    kenyamanan maksimal, teknologi modern, dan efisiensi tinggi
                    untuk perjalanan sehari-hari maupun perjalanan jauh.

                </p>

                <!-- Harga -->
                <div class="mt-7 sm:mt-8">

                    <p class="text-gray-500 text-sm sm:text-base">

                        Harga Mulai

                    </p>

                    <h2
                        class="text-3xl sm:text-4xl font-bold text-purple-600 mt-2">

                        Rp xxx.xxx.xxx

                    </h2>

                </div>

                <!-- Highlight -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4 mt-8 sm:mt-10">

                    <div class="bg-white rounded-2xl p-4 sm:p-5 shadow-lg">

                        🔋 Blade Battery

                    </div>

                    <div class="bg-white rounded-2xl p-4 sm:p-5 shadow-lg">

                        👨‍👩‍👧‍👦 7-Seater

                    </div>

                    <div class="bg-white rounded-2xl p-4 sm:p-5 shadow-lg">

                        ⚡ Fast Charging

                    </div>

                    <div class="bg-white rounded-2xl p-4 sm:p-5 shadow-lg">

                        🛡️ Advanced Safety

                    </div>

                </div>

                <!-- Tombol -->
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 mt-8 sm:mt-10">

                    <a
                        href="https://wa.me/6281234567890?text=Halo%20Sales%20BYD,%20Saya%20tertarik%20dengan%20BYD%20M6"
                        target="_blank"
                        class="w-full sm:w-auto text-center bg-purple-600 hover:bg-purple-700 text-white px-8 py-4 rounded-xl font-semibold transition">

                        Hubungi Sales

                    </a>

                    <a
                        href="#"
                        class="w-full sm:w-auto text-center border-2 border-purple-600 text-purple-600 hover:bg-purple-600 hover:text-white px-8 py-4 rounded-xl font-semibold transition">

                        Download Brosur

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ==========================
        SPESIFIKASI
========================== -->

<section class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Judul -->
        <div class="text-center mb-10 sm:mb-16">

            <span
                class="inline-flex bg-purple-100 text-purple-700 px-4 sm:px-5 py-2 rounded-full text-xs sm:text-sm font-semibold">

                ⚙️ Spesifikasi

            </span>

            <h2
                class="text-3xl sm:text-4xl lg:text-5xl font-bold mt-5">

                BYD M6 Specifications

            </h2>

            <p
                class="text-gray-500 mt-4 sm:mt-5 max-w-2xl mx-auto text-sm sm:text-base leading-7">

                MPV listrik keluarga dengan kenyamanan maksimal, kabin luas,
                dan teknologi kendaraan listrik terbaru dari BYD.

            </p>

        </div>

        <!-- Tabel -->
        <div class="overflow-x-auto rounded-2xl sm:rounded-3xl shadow-xl border border-gray-100">

            <table class="w-full min-w-[600px]">

                <tbody>

                    <tr class="border-b">

                        <td
                            class="bg-gray-50 font-semibold p-4 sm:p-6 w-1/3 text-sm sm:text-base">

                            Tipe Kendaraan

                        </td>

                        <td class="p-4 sm:p-6 text-sm sm:text-base">

                            MPV Listrik

                        </td>

                    </tr>

                    <tr class="border-b">

                        <td
                            class="bg-gray-50 font-semibold p-4 sm:p-6 text-sm sm:text-base">

                            Motor

                        </td>

                        <td class="p-4 sm:p-6 text-sm sm:text-base">

                            Permanent Magnet Synchronous Motor

                        </td>

                    </tr>

                    <tr class="border-b">

                        <td
                            class="bg-gray-50 font-semibold p-4 sm:p-6 text-sm sm:text-base">

                            Daya Maksimum

                        </td>

                        <td class="p-4 sm:p-6 text-sm sm:text-base">

                            150 kW

                        </td>

                    </tr>

                    <tr class="border-b">

                        <td
                            class="bg-gray-50 font-semibold p-4 sm:p-6 text-sm sm:text-base">

                            Torsi Maksimum

                        </td>

                        <td class="p-4 sm:p-6 text-sm sm:text-base">

                            310 Nm

                        </td>

                    </tr>

                    <tr class="border-b">

                        <td
                            class="bg-gray-50 font-semibold p-4 sm:p-6 text-sm sm:text-base">

                            Kapasitas Baterai

                        </td>

                        <td class="p-4 sm:p-6 text-sm sm:text-base">

                            Blade Battery 71.8 kWh

                        </td>

                    </tr>

                    <tr class="border-b">

                        <td
                            class="bg-gray-50 font-semibold p-4 sm:p-6 text-sm sm:text-base">

                            Jarak Tempuh

                        </td>

                        <td class="p-4 sm:p-6 text-sm sm:text-base">

                            Hingga 530 KM (NEDC)

                        </td>

                    </tr>

                    <tr class="border-b">

                        <td
                            class="bg-gray-50 font-semibold p-4 sm:p-6 text-sm sm:text-base">

                            Kapasitas Penumpang

                        </td>

                        <td class="p-4 sm:p-6 text-sm sm:text-base">

                            7 Penumpang

                        </td>

                    </tr>

                    <tr>

                        <td
                            class="bg-gray-50 font-semibold p-4 sm:p-6 text-sm sm:text-base">

                            Sistem Penggerak

                        </td>

                        <td class="p-4 sm:p-6 text-sm sm:text-base">

                            Front Wheel Drive (FWD)

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</section>

<!-- ==========================
        GALERI MOBIL
========================== -->

<section class="py-24 bg-gray-50">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Judul -->
        <div class="text-center mb-10 sm:mb-16">

            <span
                class="inline-flex bg-purple-100 text-purple-700 px-4 sm:px-5 py-2 rounded-full text-xs sm:text-sm font-semibold">

                📸 Galeri

            </span>

            <h2
                class="text-3xl sm:text-4xl lg:text-5xl font-bold mt-5">

                BYD M6 Gallery

            </h2>

            <p
                class="text-gray-500 mt-4 sm:mt-5 max-w-2xl mx-auto text-sm sm:text-base leading-7">

                Lihat tampilan BYD M6 dari berbagai sudut dengan desain modern
                dan kabin yang luas.

            </p>

        </div>


        <!-- =========================
             GALERI + PILIH WARNA
        ========================= -->

        <div
            x-data="{
                image: '{{ asset('images/products/byd-M6.webp') }}',

                

                colors: [
                    {
                        name: 'Quartz Blue',
                        image: '{{ asset('images/products/m6-quartz-blue.webp') }}',
                        class: 'bg-[#5f88b5]'
                    },
                    {
                        name: 'Crystal White',
                        image: '{{ asset('images/products/m6-crystal-white.webp') }}',
                        class: 'bg-white'
                    },
                    {
                        name: 'Cosmos Black',
                        image: '{{ asset('images/products/m6-cosmos-black.webp') }}',
                        class: 'bg-[#181818]'
                    },
                    {
                        name: 'Harbour Gray',
                        image: '{{ asset('images/products/m6-harbour-grey.webp') }}',
                        class: 'bg-[#b8b8b8]'
                    }
                ],

                changeColor(color) {
                    this.selectedColor = color.name;
                    this.image = color.image;
                }
            }">


            <!-- =========================
                 FOTO UTAMA
            ========================= -->

            <div
                class="bg-white rounded-2xl sm:rounded-3xl shadow-xl overflow-hidden p-4 sm:p-6 lg:p-8">

                <img
                    :src="image"
                    alt="BYD M6"
                    class="w-full h-[280px] sm:h-[400px] lg:h-[550px] object-contain transition-all duration-500">

            </div>


            <!-- =========================
                 PILIH WARNA
            ========================= -->

            <div
                class="mt-6 sm:mt-8 flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-6">

                <!-- Label -->

                <span
                    class="text-base sm:text-lg font-semibold text-gray-800">

                    Pilih Warna

                </span>


                <!-- Pilihan Warna -->

                <div class="flex items-center gap-3 sm:gap-4">

                    <template
                        x-for="color in colors"
                        :key="color.name">

                        <button
                            type="button"

                            @click="changeColor(color)"

                            :aria-label="color.name"

                            class="w-12 h-12 sm:w-14 sm:h-14 rounded-full flex items-center justify-center border-2 border-transparent transition-all duration-300 hover:scale-110"

                            :class="{
                                'border-blue-600 shadow-[0_0_0_3px_rgba(37,99,235,0.12)]':
                                    selectedColor === color.name
                            }">

                            <span
                                class="w-8 h-8 sm:w-9 sm:h-9 rounded-full border border-gray-200 shadow-sm"
                                :class="color.class"></span>

                        </button>

                    </template>

                </div>

            </div>


            <!-- =========================
                 NAMA WARNA
            ========================= -->

            <div class="text-center mt-3">

                <span
                    class="text-sm text-gray-500"
                    x-text="selectedColor"></span>

            </div>


            <!-- =========================
                 THUMBNAIL
            ========================= -->

            <div
                class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-5 lg:gap-6 mt-5 sm:mt-8">


                <!-- Thumbnail 1 -->

                <img
                    @click="image='{{ asset('images/products/M6-1.webp') }}'"

                    src="{{ asset('images/products/M6-1.webp') }}"

                    alt="BYD M6 1"

                    class="w-full h-28 sm:h-32 lg:h-40 object-cover rounded-xl sm:rounded-2xl shadow-md cursor-pointer hover:scale-105 hover:shadow-xl transition duration-300 border-2 border-transparent hover:border-purple-500">


                <!-- Thumbnail 2 -->

                <img
                    @click="image='{{ asset('images/products/M6-2.webp') }}'"

                    src="{{ asset('images/products/M6-2.webp') }}"

                    alt="BYD M6 2"

                    class="w-full h-28 sm:h-32 lg:h-40 object-cover rounded-xl sm:rounded-2xl shadow-md cursor-pointer hover:scale-105 hover:shadow-xl transition duration-300 border-2 border-transparent hover:border-purple-500">


                <!-- Thumbnail 3 -->

                <img
                    @click="image='{{ asset('images/products/M6-3.webp') }}'"

                    src="{{ asset('images/products/M6-3.webp') }}"

                    alt="BYD M6 3"

                    class="w-full h-28 sm:h-32 lg:h-40 object-cover rounded-xl sm:rounded-2xl shadow-md cursor-pointer hover:scale-105 hover:shadow-xl transition duration-300 border-2 border-transparent hover:border-purple-500">


                <!-- Thumbnail 4 -->

                <img
                    @click="image='{{ asset('images/products/M6-4.webp') }}'"

                    src="{{ asset('images/products/M6-4.webp') }}"

                    alt="BYD M6 4"

                    class="w-full h-28 sm:h-32 lg:h-40 object-cover rounded-xl sm:rounded-2xl shadow-md cursor-pointer hover:scale-105 hover:shadow-xl transition duration-300 border-2 border-transparent hover:border-purple-500">

            </div>


        </div>

    </div>

</section>

<!-- ==========================
        RELATED PRODUCTS
========================== -->

<section class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Judul -->
        <div class="text-center mb-10 sm:mb-14">

            <span
                class="inline-flex bg-purple-100 text-purple-700 px-4 sm:px-5 py-2 rounded-full text-xs sm:text-sm font-semibold">

                🚗 Mobil Lainnya

            </span>

            <h2
                class="text-3xl sm:text-4xl lg:text-5xl font-bold mt-5">

                Jelajahi Produk BYD Lainnya

            </h2>

            <p
                class="text-gray-500 mt-4 sm:mt-5 max-w-2xl mx-auto text-sm sm:text-base leading-7">

                Temukan berbagai pilihan mobil listrik BYD sesuai kebutuhan Anda.

            </p>

        </div>

        <!-- Card Produk -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

            <!-- BYD Seal -->
            <div
                class="bg-white rounded-2xl sm:rounded-3xl shadow-lg overflow-hidden
                   hover:-translate-y-2 hover:shadow-2xl
                   transition duration-300">

                <div class="p-4 sm:p-0">

                    <img
                        src="{{ asset('images/products/byd-seal-surabaya-colors-1.webp') }}"
                        alt="BYD Seal"
                        class="w-full h-48 sm:h-52 lg:h-56 object-contain bg-white">

                </div>

                <div class="p-5 sm:p-6">

                    <h3 class="text-xl sm:text-2xl font-bold">

                        BYD Seal

                    </h3>

                    <p class="text-gray-500 mt-2 text-sm sm:text-base">

                        Sedan Listrik Premium

                    </p>

                    <a
                        href="{{ route('products.byd-seal') }}"
                        class="mt-5 sm:mt-6 block w-full text-center
                           bg-purple-600 hover:bg-purple-700
                           text-white py-3 rounded-xl transition">

                        Lihat Detail

                    </a>

                </div>

            </div>


            <!-- BYD Dolphin -->
            <div
                class="bg-white rounded-2xl sm:rounded-3xl shadow-lg overflow-hidden
                   hover:-translate-y-2 hover:shadow-2xl
                   transition duration-300">

                <div class="p-4 sm:p-0">

                    <img
                        src="{{ asset('images/products/byd-dolphin.webp') }}"
                        alt="BYD Dolphin"
                        class="w-full h-48 sm:h-52 lg:h-56 object-contain bg-white">

                </div>

                <div class="p-5 sm:p-6">

                    <h3 class="text-xl sm:text-2xl font-bold">

                        BYD Dolphin

                    </h3>

                    <p class="text-gray-500 mt-2 text-sm sm:text-base">

                        Hatchback Listrik

                    </p>

                    <a
                        href="{{ route('products.byd-dolphin') }}"
                        class="mt-5 sm:mt-6 block w-full text-center
                           bg-purple-600 hover:bg-purple-700
                           text-white py-3 rounded-xl transition">

                        Lihat Detail

                    </a>

                </div>

            </div>


            <!-- BYD Atto 3 -->
            <div
                class="bg-white rounded-2xl sm:rounded-3xl shadow-lg overflow-hidden
                   hover:-translate-y-2 hover:shadow-2xl
                   transition duration-300">

                <div class="p-4 sm:p-0">

                    <img
                        src="{{ asset('images/products/byd-atto-3.webp') }}"
                        alt="BYD Atto 3"
                        class="w-full h-48 sm:h-52 lg:h-56 object-contain bg-white">

                </div>

                <div class="p-5 sm:p-6">

                    <h3 class="text-xl sm:text-2xl font-bold">

                        BYD Atto 3

                    </h3>

                    <p class="text-gray-500 mt-2 text-sm sm:text-base">

                        SUV Listrik

                    </p>

                    <a
                        href="{{ route('products.byd-atto-3') }}"
                        class="mt-5 sm:mt-6 block w-full text-center
                           bg-purple-600 hover:bg-purple-700
                           text-white py-3 rounded-xl transition">

                        Lihat Detail

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection