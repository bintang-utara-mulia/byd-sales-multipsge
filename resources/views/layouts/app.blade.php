<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'BYD Sales')</title>

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Tailwind CSS via Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tag pendukung meta responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body
    x-data="{
        bookingOpen: false,

        booking:{
            nama:'',
            whatsapp:'',
            kota:'',
            mobil:'',
            tanggal:'',
            jam:'',
            catatan:''
        }
    }"
    class="bg-white text-gray-800 font-[Poppins]">

    {{-- Navbar --}}
    @include('sections.navbar')

    {{-- Content --}}
    <main>
        @yield('content')
    </main>



    @include('sections.footer')

    {{-- Floating WhatsApp --}}
    @include('sections.whatsapp')


</body>

</html>