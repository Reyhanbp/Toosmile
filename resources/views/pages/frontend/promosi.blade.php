@extends('pages.frontend.layout')
@section('title', 'Promosi | Toosmile Dental')
@section('content')
<section class="mx-auto max-w-7xl px-6 py-16 lg:py-24">
    <p class="font-bold uppercase tracking-wider text-brand-blue">Penawaran Spesial</p><h1 class="mt-3 text-4xl font-extrabold lg:text-5xl">Promosi Toosmile</h1>
    <p class="mt-5 max-w-2xl leading-7 text-slate-600">Temukan penawaran perawatan yang tersedia. Konfirmasi syarat dan jadwal promosi kepada tim kami saat membuat janji.</p>
    <div class="mt-10 grid gap-6 md:grid-cols-3">
        @foreach ([['Paket Senyum Sehat','Pemeriksaan dan scaling untuk memulai perawatan gigimu.','Paket mulai Rp 299.000'],['Konsultasi Behel','Konsultasi awal untuk mengetahui pilihan dan rencana perawatan ortodonti.','Konsultasi awal tersedia'],['Perawatan Keluarga','Atur kunjungan keluarga dalam satu jadwal yang lebih praktis.','Tanyakan paket keluarga']] as [$title, $description, $offer])
        <article class="rounded-2xl border border-blue-100 bg-white p-7"><span class="inline-flex rounded-full bg-amber-100 px-3 py-1 text-xs font-bold text-brand-dark">Penawaran klinik</span><h2 class="mt-5 text-xl font-bold">{{ $title }}</h2><p class="mt-3 text-sm leading-6 text-slate-600">{{ $description }}</p><p class="mt-5 font-extrabold text-brand-blue">{{ $offer }}</p><a class="mt-6 inline-block font-bold text-brand-blue hover:underline" href="{{ route('front.booking') }}">Tanya jadwal <span aria-hidden="true">&rarr;</span></a></article>
        @endforeach
    </div>
</section>
@endsection
