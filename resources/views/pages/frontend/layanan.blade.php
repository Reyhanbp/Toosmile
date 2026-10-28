@extends('pages.frontend.layout')
@section('title', 'Layanan Perawatan Gigi | Toosmile Dental')
@section('content')
<section class="mx-auto max-w-7xl px-6 py-16 lg:py-24">
    <p class="font-bold uppercase tracking-wider text-brand-blue">Layanan Kami</p>
    <h1 class="mt-3 max-w-3xl text-4xl font-extrabold lg:text-5xl">Perawatan lengkap untuk setiap senyum</h1>
    <p class="mt-5 max-w-2xl leading-7 text-slate-600">Pilih perawatan yang sesuai dengan kebutuhanmu. Tim kami akan membantu menjelaskan pilihan dan langkah perawatan sebelum tindakan dimulai.</p>
    <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ([['Pemeriksaan & Konsultasi','Pemeriksaan menyeluruh dan rencana perawatan yang disesuaikan.','fa-stethoscope','Mulai Rp 100.000'],['Scaling Gigi','Membersihkan karang gigi agar gusi dan napas tetap sehat.','fa-sparkles','Mulai Rp 199.000'],['Tambal Gigi','Perawatan gigi berlubang dengan bahan tambal berkualitas.','fa-tooth','Mulai Rp 250.000'],['Bleaching','Mencerahkan warna gigi dengan prosedur yang diawasi dokter.','fa-wand-magic-sparkles','Mulai Rp 1.499.000'],['Perawatan Behel','Pilihan perawatan ortodonti untuk membantu merapikan susunan gigi.','fa-teeth','Mulai Rp 3.500.000'],['Cabut Gigi','Pencabutan gigi dengan pemeriksaan dan penanganan yang cermat.','fa-teeth-open','Konsultasi dahulu']] as [$name, $description, $icon, $price])
        <article class="rounded-2xl border border-blue-100 bg-white p-7 shadow-sm"><div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-xl text-brand-blue"><i class="fa-solid {{ $icon }}"></i></div><h2 class="mt-5 text-xl font-bold">{{ $name }}</h2><p class="mt-2 min-h-14 text-sm leading-6 text-slate-600">{{ $description }}</p><p class="mt-4 font-extrabold text-brand-blue">{{ $price }}</p></article>
        @endforeach
    </div>
    <a href="{{ route('front.booking') }}" class="mt-10 inline-flex rounded-xl bg-brand-blue px-6 py-3 font-bold text-white hover:bg-blue-900">Konsultasi & Buat Janji</a>
</section>
@endsection
