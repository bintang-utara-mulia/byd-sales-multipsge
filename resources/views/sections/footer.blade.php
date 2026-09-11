<footer data-aos="fade-in" class="bg-slate-900 text-gray-300">

    <div class="max-w-7xl mx-auto px-6 py-16">

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- Logo -->
            <div>

                <div class="flex items-center gap-3">

                    <img src="{{ asset('images/logo/logo-byd.webp') }}"
                        alt="BYD Logo"
                        class="w-16">

                    <div>

                        <h3 class="text-2xl font-bold text-white">
                            BYD Sales
                        </h3>

                        <p class="text-gray-400">
                            Build Your Dreams
                        </p>

                    </div>

                </div>

                <p class="mt-6 leading-7">
                    Dealer mobil listrik BYD terpercaya yang siap membantu Anda
                    mendapatkan kendaraan listrik terbaik dengan pelayanan profesional.
                </p>

            </div>

            <!-- Menu -->
            <div>

                <h4 class="text-xl font-semibold text-white mb-5">
                    Menu
                </h4>

                <ul class="space-y-3">

                    <li><a href="{{ route('home') }}" class="hover:text-blue-400 transition">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-blue-400 transition">Tentang</a></li>
                    <li><a href="{{ route('products') }}" class="hover:text-blue-400 transition">Produk</a></li>
                    <li><a href="{{ route('testimonials') }}" class="hover:text-blue-400 transition">Testimoni</a></li>
                    <li><a href="{{ route('faq') }}" class="hover:text-blue-400 transition">FAQ</a></li>

                </ul>

            </div>

            <!-- Kontak -->
            <div>

                <h4 class="text-xl font-semibold text-white mb-5">
                    Kontak
                </h4>

                <div class="space-y-4">

                    <p>
                        📍 Surabaya, Jawa Timur
                    </p>

                    <p>
                        📞 +62 895-6227-49042
                    </p>

                    <p>
                        ✉️ sales@bydsales.id
                    </p>

                </div>

            </div>

            <!-- Jam Operasional -->
            <div>

                <h4 class="text-xl font-semibold text-white mb-5">
                    Jam Operasional
                </h4>

                <div class="space-y-3">

                    <p>Senin - Jumat</p>
                    <p>08.00 - 17.00 WIB</p>

                    <p>Sabtu</p>
                    <p>08.00 - 15.00 WIB</p>

                    <p>Minggu Libur</p>

                </div>

            </div>

        </div>

        <!-- Garis -->
        <div class="border-t border-slate-700 mt-12 pt-8">

            <div class="flex flex-col md:flex-row justify-between items-center gap-4">

                <p class="text-gray-400 text-center md:text-left">
                    © {{ date('Y') }} BYD Sales. All Rights Reserved.
                </p>

                <div class="flex gap-6 text-xl">

                    <a href="{{ route('contact') }}" class="hover:text-blue-400 transition">
                        Facebook
                    </a>

                    <a href="{{ route('contact') }}" class="hover:text-blue-400 transition">
                        Instagram
                    </a>

                    <a href="{{ route('contact') }}" class="hover:text-blue-400 transition">
                        TikTok
                    </a>

                </div>

            </div>

        </div>

    </div>

</footer>