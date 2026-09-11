@extends('layouts.app')

@section('title', 'BYD Dolphin')

@section('content')

<!-- =========================
     HERO / DETAIL PRODUK
========================= -->
<section class="py-8 sm:py-12 lg:py-16">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Tombol Kembali -->
        <a href="/"
            class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 font-medium mb-8 sm:mb-10 transition text-sm sm:text-base">

            ← Kembali ke Beranda

        </a>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            <!-- FOTO MOBIL -->
            <div class="relative w-full">

                <div
                    class="absolute inset-0 bg-cyan-100 rounded-full blur-3xl opacity-40">
                </div>

                <img
                    src="{{ asset('images/products/byd-dolphin.webp') }}"
                    alt="BYD Dolphin"
                    class="relative w-full h-auto max-h-[400px] sm:max-h-[500px] lg:max-h-none object-contain drop-shadow-2xl hover:scale-105 transition duration-500">

            </div>

            <!-- INFORMASI -->
            <div>

                <span
                    class="inline-flex bg-cyan-100 text-cyan-700 px-4 py-2 rounded-full text-xs sm:text-sm font-semibold">

                    🚘 Hatchback Listrik

                </span>

                <h1
                    class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-gray-900 mt-5 sm:mt-6">

                    BYD Dolphin

                </h1>

                <p
                    class="text-base sm:text-lg text-gray-600 mt-5 sm:mt-6 leading-7 sm:leading-8">

                    BYD Dolphin hadir sebagai hatchback listrik modern
                    dengan desain futuristik, teknologi canggih,
                    kabin yang nyaman, dan efisiensi tinggi untuk
                    mobilitas perkotaan maupun perjalanan jarak jauh.

                </p>

                <!-- Harga -->
                <div class="mt-7 sm:mt-8">

                    <p class="text-gray-500 text-sm sm:text-base">

                        Harga Mulai

                    </p>

                    <h2
                        class="text-3xl sm:text-4xl font-bold text-cyan-600 mt-2">

                        Rp xxx.xxx.xxx

                    </h2>

                </div>

                <!-- Highlight -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-8 sm:mt-10">

                    <div class="bg-white rounded-2xl p-4 sm:p-5 shadow-lg">
                        🔋 Blade Battery
                    </div>

                    <div class="bg-white rounded-2xl p-4 sm:p-5 shadow-lg">
                        ⚡ Fast Charging
                    </div>

                    <div class="bg-white rounded-2xl p-4 sm:p-5 shadow-lg">
                        🚗 Hingga 490 KM
                    </div>

                    <div class="bg-white rounded-2xl p-4 sm:p-5 shadow-lg">
                        🛡️ 5-Star Safety
                    </div>

                </div>

                <!-- Tombol -->
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 mt-8 sm:mt-10">

                    <a
                        href="https://wa.me/6281234567890?text=Halo%20Sales%20BYD,%20saya%20tertarik%20dengan%20BYD%20Dolphin."
                        target="_blank"
                        class="w-full sm:w-auto text-center bg-cyan-600 hover:bg-cyan-700 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-xl font-semibold transition">

                        Hubungi Sales

                    </a>

                    <a
                        href="#"
                        class="w-full sm:w-auto text-center border-2 border-cyan-600 text-cyan-600 hover:bg-cyan-600 hover:text-white px-6 sm:px-8 py-3 sm:py-4 rounded-xl font-semibold transition">

                        Download Brosur

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     SPESIFIKASI
========================= -->
<section class="py-12 sm:py-16 lg:py-20">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Judul -->
        <div class="text-center mb-10 sm:mb-14 lg:mb-16">

            <span
                class="inline-flex bg-cyan-100 text-cyan-700 px-4 sm:px-5 py-2 rounded-full text-xs sm:text-sm font-semibold">

                ⚙️ Spesifikasi

            </span>

            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mt-5">

                BYD Dolphin Specifications

            </h2>

            <p class="text-gray-500 mt-4 sm:mt-5 max-w-2xl mx-auto text-sm sm:text-base leading-7">

                Nikmati pengalaman berkendara yang nyaman dengan teknologi
                kendaraan listrik terbaru dari BYD.

            </p>

        </div>

        <!-- Tabel -->
        <div class="overflow-x-auto rounded-3xl shadow-xl border border-gray-100">

            <table class="w-full min-w-[650px]">

                <tbody>

                    <tr class="border-b">

                        <td class="bg-gray-50 font-semibold p-4 sm:p-6 w-1/3">
                            Tipe Kendaraan
                        </td>

                        <td class="p-4 sm:p-6">
                            Hatchback Listrik
                        </td>

                    </tr>

                    <tr class="border-b">

                        <td class="bg-gray-50 font-semibold p-4 sm:p-6">
                            Motor
                        </td>

                        <td class="p-4 sm:p-6">
                            Permanent Magnet Synchronous Motor
                        </td>

                    </tr>

                    <tr class="border-b">

                        <td class="bg-gray-50 font-semibold p-4 sm:p-6">
                            Daya Maksimum
                        </td>

                        <td class="p-4 sm:p-6">
                            150 kW
                        </td>

                    </tr>

                    <tr class="border-b">

                        <td class="bg-gray-50 font-semibold p-4 sm:p-6">
                            Torsi Maksimum
                        </td>

                        <td class="p-4 sm:p-6">
                            310 Nm
                        </td>

                    </tr>

                    <tr class="border-b">

                        <td class="bg-gray-50 font-semibold p-4 sm:p-6">
                            Kapasitas Baterai
                        </td>

                        <td class="p-4 sm:p-6">
                            Blade Battery 60.48 kWh
                        </td>

                    </tr>

                    <tr class="border-b">

                        <td class="bg-gray-50 font-semibold p-4 sm:p-6">
                            Jarak Tempuh
                        </td>

                        <td class="p-4 sm:p-6">
                            Hingga 490 KM (NEDC)
                        </td>

                    </tr>

                    <tr class="border-b">

                        <td class="bg-gray-50 font-semibold p-4 sm:p-6">
                            Akselerasi
                        </td>

                        <td class="p-4 sm:p-6">
                            0–100 km/jam dalam 7 detik
                        </td>

                    </tr>

                    <tr class="border-b">

                        <td class="bg-gray-50 font-semibold p-4 sm:p-6">
                            Penggerak
                        </td>

                        <td class="p-4 sm:p-6">
                            Front Wheel Drive (FWD)
                        </td>

                    </tr>

                    <tr>

                        <td class="bg-gray-50 font-semibold p-4 sm:p-6">
                            Kecepatan Maksimum
                        </td>

                        <td class="p-4 sm:p-6">
                            160 km/jam
                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</section>


<!-- =========================
     GALERI
========================= -->
<section class="py-12 sm:py-16 lg:py-20">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Judul -->
        <div class="text-center mb-10 sm:mb-14">

            <span
                class="inline-flex bg-cyan-100 text-cyan-700 px-4 sm:px-5 py-2 rounded-full text-xs sm:text-sm font-semibold">

                📸 Galeri

            </span>

            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mt-5">

                BYD Dolphin Gallery

            </h2>

            <p class="text-gray-500 mt-4 sm:mt-5 max-w-2xl mx-auto text-sm sm:text-base leading-7">

                Lihat tampilan BYD Dolphin dari berbagai sudut dengan desain modern dan futuristik.

            </p>

        </div>


        <!-- =========================
             GALERI + PILIH WARNA
        ========================= -->

        <div
            x-data="{
                image: '{{ asset('images/products/byd-dolphin.webp') }}',

                

                colors: [
                    {
                        name: 'Surf Blue',
                        image: '{{ asset('images/products/surf-blue.webp') }}',
                        class: 'bg-[#8fb9e8]'
                    },
                    {
                        name: 'Ski White',
                        image: '{{ asset('images/products/ski-white.webp') }}',
                        class: 'bg-white'
                    },
                    {
                        name: 'Atlantis Gray',
                        image: '{{ asset('images/products/atlantis-grey.webp') }}',
                        class: 'bg-[#566d8a]'
                    },
                    {
                        name: 'Coral Pink',
                        image: '{{ asset('images/products/coral-pink.webp') }}',
                        class: 'bg-[#F88379]'
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
                class="bg-white rounded-3xl shadow-xl overflow-hidden p-4 sm:p-6 lg:p-8">

                <img
                    :src="image"
                    alt="BYD Dolphin"
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
                    @click="image='{{ asset('images/products/dolphin-interior-1.webp') }}'"

                    src="{{ asset('images/products/dolphin-interior-1.webp') }}"

                    alt="BYD Dolphin 1"

                    class="w-full h-28 sm:h-36 lg:h-44 object-contain bg-white rounded-2xl shadow-md cursor-pointer hover:scale-105 hover:shadow-xl transition duration-300 border-2 border-transparent hover:border-cyan-500">


                <!-- Thumbnail 2 -->

                <img
                    @click="image='{{ asset('images/products/dolphin-interior-2.webp') }}'"

                    src="{{ asset('images/products/dolphin-interior-2.webp') }}"

                    alt="BYD Dolphin 2"

                    class="w-full h-28 sm:h-36 lg:h-44 object-contain bg-white rounded-2xl shadow-md cursor-pointer hover:scale-105 hover:shadow-xl transition duration-300 border-2 border-transparent hover:border-cyan-500">


                <!-- Thumbnail 3 -->

                <img
                    @click="image='{{ asset('images/products/dolphin-interior-3.webp') }}'"

                    src="{{ asset('images/products/dolphin-interior-3.webp') }}"

                    alt="BYD Dolphin 3"

                    class="w-full h-28 sm:h-36 lg:h-44 object-contain bg-white rounded-2xl shadow-md cursor-pointer hover:scale-105 hover:shadow-xl transition duration-300 border-2 border-transparent hover:border-cyan-500">


                <!-- Thumbnail 4 -->

                <img
                    @click="image='{{ asset('images/products/dolphin-interior-4.webp') }}'"

                    src="{{ asset('images/products/dolphin-interior-4.webp') }}"

                    alt="BYD Dolphin 4"

                    class="w-full h-28 sm:h-36 lg:h-44 object-contain bg-white rounded-2xl shadow-md cursor-pointer hover:scale-105 hover:shadow-xl transition duration-300 border-2 border-transparent hover:border-cyan-500">

            </div>


        </div>

    </div>

</section>


<!-- =========================
     PRODUK LAINNYA
========================= -->
<section class="py-12 sm:py-16 lg:py-20">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Judul -->
        <div class="text-center mb-10 sm:mb-14">

            <span
                class="inline-flex bg-cyan-100 text-cyan-700 px-4 sm:px-5 py-2 rounded-full text-xs sm:text-sm font-semibold">

                🚗 Mobil Lainnya

            </span>

            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mt-5">

                Jelajahi Produk BYD Lainnya

            </h2>

            <p class="text-gray-500 mt-4 sm:mt-5 max-w-2xl mx-auto text-sm sm:text-base leading-7">

                Temukan berbagai pilihan mobil listrik BYD sesuai kebutuhan Anda.

            </p>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

            <!-- BYD Seal -->
            <div
                class="bg-white rounded-3xl shadow-lg overflow-hidden hover:-translate-y-2 hover:shadow-2xl transition duration-300">

                <img
                    src="{{ asset('images/products/byd-seal-surabaya-colors-1.webp') }}"
                    alt="BYD Seal"
                    class="w-full h-48 sm:h-56 object-contain bg-white">

                <div class="p-5 sm:p-6">

                    <h3 class="text-xl sm:text-2xl font-bold">
                        BYD Seal
                    </h3>

                    <p class="text-gray-500 mt-2">
                        Sedan Listrik Premium
                    </p>

                    <a
                        href="{{ route('products.byd-seal') }}"
                        class="mt-5 sm:mt-6 block w-full text-center bg-cyan-600 hover:bg-cyan-700 text-white py-3 rounded-xl transition">

                        Lihat Detail

                    </a>

                </div>

            </div>

            <!-- BYD Atto 3 -->
            <div
                class="bg-white rounded-3xl shadow-lg overflow-hidden hover:-translate-y-2 hover:shadow-2xl transition duration-300">

                <img
                    src="{{ asset('images/products/byd-atto-3.webp') }}"
                    alt="BYD Atto 3"
                    class="w-full h-48 sm:h-56 object-contain bg-white">

                <div class="p-5 sm:p-6">

                    <h3 class="text-xl sm:text-2xl font-bold">
                        BYD Atto 3
                    </h3>

                    <p class="text-gray-500 mt-2">
                        SUV Listrik
                    </p>

                    <a
                        href="{{ route('products.byd-atto-3') }}"
                        class="mt-5 sm:mt-6 block w-full text-center bg-cyan-600 hover:bg-cyan-700 text-white py-3 rounded-xl transition">

                        Lihat Detail

                    </a>

                </div>

            </div>

            <!-- BYD M6 -->
            <div
                class="bg-white rounded-3xl shadow-lg overflow-hidden hover:-translate-y-2 hover:shadow-2xl transition duration-300">

                <img
                    src="{{ asset('images/products/byd-M6.webp') }}"
                    alt="BYD M6"
                    class="w-full h-48 sm:h-56 object-contain bg-white">

                <div class="p-5 sm:p-6">

                    <h3 class="text-xl sm:text-2xl font-bold">
                        BYD M6
                    </h3>

                    <p class="text-gray-500 mt-2">
                        MPV Listrik
                    </p>

                    <a
                        href="{{ route('products.byd-m6') }}"
                        class="mt-5 sm:mt-6 block w-full text-center bg-cyan-600 hover:bg-cyan-700 text-white py-3 rounded-xl transition">

                        Lihat Detail

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection