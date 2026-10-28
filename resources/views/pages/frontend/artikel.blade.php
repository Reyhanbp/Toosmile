@extends('pages.frontend.layout')
@section('title', 'Artikel Kesehatan Gigi | Toosmile Dental')
@section('content')
<section class="mx-auto max-w-7xl px-6 py-16 lg:py-24">
    <p class="font-bold uppercase tracking-wider text-brand-blue">Pusat Informasi</p><h1 class="mt-3 text-4xl font-extrabold lg:text-5xl">Artikel kesehatan gigi</h1>
    <p class="mt-5 max-w-2xl leading-7 text-slate-600">Informasi sederhana dari tim Toosmile untuk membantu kamu merawat gigi setiap hari.</p>
    <div class="mt-10 grid gap-6 md:grid-cols-3">
        @foreach ([['Cara menyikat gigi yang benar','Gunakan sikat berbulu lembut dan bersihkan seluruh permukaan gigi dengan gerakan perlahan selama dua menit.','5 menit baca'],['Kapan sebaiknya melakukan scaling?','Pemeriksaan rutin membantu dokter menentukan waktu scaling sesuai kondisi gigi dan gusi setiap pasien.','4 menit baca'],['Apa yang perlu disiapkan sebelum pasang behel?','Konsultasi dan pemeriksaan awal membantu menyusun rencana ortodonti yang sesuai kebutuhanmu.','6 menit baca']] as [$title, $summary, $duration])
        <article class="overflow-hidden rounded-2xl border border-blue-100 bg-white"><div class="flex h-36 items-center justify-center bg-blue-50 text-5xl text-brand-blue"><i class="fa-regular fa-newspaper"></i></div><div class="p-6"><p class="text-xs font-bold uppercase tracking-wide text-brand-blue">Tips Kesehatan</p><h2 class="mt-3 text-xl font-bold">{{ $title }}</h2><p class="mt-3 text-sm leading-6 text-slate-600">{{ $summary }}</p><p class="mt-4 text-xs font-semibold text-slate-400">{{ $duration }}</p></div></article>
        @endforeach
    </div>
</section>
@endsection
