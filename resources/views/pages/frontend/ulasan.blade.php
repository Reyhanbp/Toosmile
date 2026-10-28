@extends('pages.frontend.layout')
@section('title', 'Ulasan Pasien | Toosmile Dental')
@section('content')
<section class="mx-auto max-w-7xl px-6 py-16 lg:py-24">
    <p class="font-bold uppercase tracking-wider text-brand-blue">Cerita Pasien</p><h1 class="mt-3 text-4xl font-extrabold lg:text-5xl">Senyum dan pengalaman mereka</h1>
    <p class="mt-5 max-w-2xl leading-7 text-slate-600">Kami berusaha memberikan pengalaman perawatan yang nyaman dan jelas di setiap kunjungan.</p>
    <div class="mt-10 grid gap-6 md:grid-cols-3">
        @foreach ([['Rina A.','Dokternya ramah dan menjelaskan proses scaling dengan jelas. Kliniknya bersih dan nyaman.'],['Bima P.','Saya merasa lebih tenang saat konsultasi. Semua pilihan perawatan dijelaskan dengan baik.'],['Sari M.','Proses booking mudah dan staf membantu saya memilih jadwal yang sesuai.']] as [$name, $review])
        <figure class="rounded-2xl border border-blue-100 bg-white p-7"><div class="text-amber-400" aria-label="5 dari 5 bintang"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div><blockquote class="mt-5 leading-7 text-slate-600">“{{ $review }}”</blockquote><figcaption class="mt-5 font-bold">{{ $name }}</figcaption></figure>
        @endforeach
    </div>
</section>
@endsection
