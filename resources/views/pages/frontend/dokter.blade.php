@extends('pages.frontend.layout')
@section('title', 'Dokter Kami | Toosmile Dental')
@section('content')
<section class="mx-auto max-w-7xl px-6 py-16 lg:py-24">
    <p class="font-bold uppercase tracking-wider text-brand-blue">Tim Medis</p><h1 class="mt-3 text-4xl font-extrabold lg:text-5xl">Kenali dokter kami</h1>
    <p class="mt-5 max-w-2xl leading-7 text-slate-600">Dokter kami siap mendampingi perjalanan perawatan gigimu dengan pendekatan yang ramah dan profesional.</p>
    <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ([['drg. Nadia Putri','Dokter Gigi Umum','Berfokus pada pemeriksaan rutin, tambal gigi, dan edukasi kesehatan gigi.'],['drg. Andi Pratama, Sp.Ort','Spesialis Ortodonti','Mendampingi perawatan behel dan perencanaan susunan gigi.'],['drg. Maya Lestari, Sp.KG','Spesialis Konservasi Gigi','Menangani perawatan saluran akar dan mempertahankan gigi alami.']] as [$name, $specialty, $bio])
        <article class="rounded-2xl border border-blue-100 bg-white p-7"><div class="flex h-16 w-16 items-center justify-center rounded-full bg-blue-50 text-2xl text-brand-blue"><i class="fa-solid fa-user-doctor"></i></div><h2 class="mt-5 text-xl font-bold">{{ $name }}</h2><p class="mt-1 font-semibold text-brand-blue">{{ $specialty }}</p><p class="mt-3 text-sm leading-6 text-slate-600">{{ $bio }}</p></article>
        @endforeach
    </div>
    <a href="{{ route('front.booking') }}" class="mt-10 inline-flex rounded-xl bg-brand-yellow px-6 py-3 font-extrabold">Jadwalkan konsultasi</a>
</section>
@endsection
