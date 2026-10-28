<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Toosmile Dental')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Plus Jakarta Sans', 'sans-serif'] },
                    colors: {
                        brand: {
                            light: '#F2F7FF',
                            blue: '#0B409C',
                            dark: '#10316B',
                            yellow: '#FDBE34',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen bg-brand-light font-outfit text-brand-dark antialiased">
    <!-- NAVBAR HEADER -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-blue-100">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="{{ route('front.index') }}" class="flex items-center gap-3">
                <div class="w-10 h-10 bg-brand-blue text-brand-yellow rounded-xl flex items-center justify-center shadow-lg text-xl font-bold">
                    <i class="fa-solid fa-tooth"></i>
                </div>
                <span class="text-2xl font-extrabold tracking-tight text-brand-dark">
                    Too<span class="text-brand-blue">smile</span><span class="text-brand-yellow">.</span>
                </span>
            </a>

            <!-- Navigasi Menu Terpisah -->
            <nav class="hidden lg:flex items-center gap-6 font-semibold text-slate-600 text-sm">
                <a href="{{ route('front.index') }}" class="text-brand-blue font-bold">Beranda</a>
                <a href="{{ route('front.layanan') }}" class="hover:text-brand-blue transition">Layanan</a>
                <a href="{{ route('front.dokter') }}" class="hover:text-brand-blue transition">Dokter</a>
                <a href="{{ route('front.artikel') }}" class="hover:text-brand-blue transition">Artikel</a>
                <a href="{{ route('front.promosi') }}" class="hover:text-brand-blue transition">Promosi</a>
                <a href="{{ route('front.ulasan') }}" class="hover:text-brand-blue transition">Ulasan</a>
                <a href="{{ route('front.about') }}" class="hover:text-brand-blue transition">Tentang Kami</a>
            </nav>

            <div class="flex items-center gap-3">
                <a href="{{ route('front.booking') }}" class="bg-brand-yellow hover:bg-amber-400 text-brand-dark font-extrabold px-5 py-2.5 rounded-xl shadow-md transition text-sm flex items-center gap-2">
                    <i class="fa-solid fa-calendar-check"></i> Booking Online
                </a>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="bg-brand-dark py-8 text-center text-sm text-blue-100">
        <a href="{{ route('front.index') }}" class="font-extrabold text-white">Toosmile Dental</a>
        <p class="mt-2">Klinik gigi modern untuk senyum yang lebih sehat.</p>
        <p class="mt-4 text-xs text-blue-200/70">&copy; {{ date('Y') }} Toosmile Dental Clinic.</p>
    </footer>
</body>
</html>
