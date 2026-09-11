<nav
    x-data="{ open: false, scrolled: false }"
    @scroll.window="scrolled = window.scrollY > 20"
    :class="scrolled
        ? 'bg-white/90 backdrop-blur-md shadow-xl'
        : 'bg-white shadow-md'"
    class="fixed top-0 left-0 w-full z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            <!-- Logo -->
            <a href="<?php echo e(route('home')); ?>" class="flex items-center gap-3">
                <img
                    src="<?php echo e(asset('images/logo/logo-byd.webp')); ?>"
                    alt="BYD Logo"
                    class="h-12 w-auto">


                <div>
                    <h1 class="text-xl font-bold text-gray-900">
                        BYD Sales
                    </h1>

                    <p class="text-xs text-gray-500">
                        Build Your Dreams
                    </p>
                </div>
            </a>

            <!-- Menu Desktop -->
            <div class="hidden md:flex items-center gap-8">

                <a href="<?php echo e(route('home')); ?>"
                    class="nav-link <?php echo e(request()->routeIs('home') ? 'text-blue-600 font-semibold' : ''); ?> hover:text-blue-600 transition">
                    Home
                </a>

                <a href="<?php echo e(route('about')); ?>"
                    class="nav-link <?php echo e(request()->routeIs('about') ? 'text-blue-600 font-semibold' : ''); ?> hover:text-blue-600 transition">
                    Tentang
                </a>

                <a href="<?php echo e(route('products')); ?>"
                    class="nav-link <?php echo e(request()->routeIs('products*') ? 'text-blue-600 font-semibold' : ''); ?> hover:text-blue-600 transition">
                    Produk
                </a>

                <a href="<?php echo e(route('promo')); ?>"
                    class="nav-link <?php echo e(request()->routeIs('promo') ? 'text-blue-600 font-semibold' : ''); ?> hover:text-blue-600 transition">
                    Promo
                </a>

                <a href="<?php echo e(route('testimonials')); ?>"
                    class="nav-link <?php echo e(request()->routeIs('testimonials') ? 'text-blue-600 font-semibold' : ''); ?> hover:text-blue-600 transition">
                    Testimoni
                </a>

                <a href="<?php echo e(route('faq')); ?>" class="nav-link <?php echo e(request()->routeIs('faq') ? 'text-blue-600 font-semibold' : ''); ?> hover:text-blue-600 transition">
                    FAQ
                </a>

                <a href="<?php echo e(route('contact')); ?>" class="nav-link <?php echo e(request()->routeIs('contact') ? 'text-blue-600 font-semibold' : ''); ?> hover:text-blue-600 transition">
                    Kontak
                </a>

            </div>

            <!-- Tombol -->
            <div class="hidden md:block">
                <a href="<?php echo e(route('contact')); ?>"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-full transition">
                    Hubungi Kami
                </a>
            </div>

            <!-- Mobile Button -->
            <button
                @click="open = !open"
                class="md:hidden text-3xl text-gray-800 p-3 z-50 relative">
                <span x-show="!open">☰</span>
                <span x-show="open">✕</span>
            </button>

        </div>

        <!-- Mobile Menu -->
        <div
            x-show="open"
            x-transition
            @click.outside="open = false"
            class="md:hidden pb-6">

            <div class="flex flex-col gap-4 pt-4 border-t">

                <a href="<?php echo e(route('home')); ?>"
                    @click="open=false"
                    class="hover:text-blue-600">
                    Home
                </a>

                <a href="<?php echo e(route('about')); ?>"
                    @click="open=false"
                    class="hover:text-blue-600">
                    Tentang
                </a>

                <a href="<?php echo e(route('products')); ?>"
                    @click="open=false"
                    class="hover:text-blue-600">
                    Produk
                </a>

                <a href="<?php echo e(route('promo')); ?>"
                    @click="open=false"
                    class="hover:text-blue-600">
                    Promo
                </a>

                <a href="<?php echo e(route('testimonials')); ?>"
                    @click="open=false"
                    class="hover:text-blue-600">
                    Testimoni
                </a>

                <a href="<?php echo e(route('faq')); ?>"
                    @click="open=false"
                    class="hover:text-blue-600">
                    FAQ
                </a>

                <a href="<?php echo e(route('contact')); ?>"
                    @click="open=false"
                    class="hover:text-blue-600">
                    Kontak
                </a>

                <a href="<?php echo e(route('contact')); ?>"
                    @click="open=false"
                    class="bg-blue-600 text-white text-center py-3 rounded-full mt-3 hover:bg-blue-700 transition">

                    Hubungi Kami

                </a>

            </div>

        </div>
    </div>
</nav><?php /**PATH C:\Users\HYPE AMD\Documents\byd-sales-MultiPage\resources\views/sections/navbar.blade.php ENDPATH**/ ?>