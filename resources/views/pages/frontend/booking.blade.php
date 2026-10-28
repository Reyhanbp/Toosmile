@extends('pages.frontend.layout')
@section('title', 'Booking Online | Toosmile Dental')
@section('content')
<section class="mx-auto max-w-3xl px-6 py-16 lg:py-24">
    <div class="rounded-3xl border border-blue-100 bg-white p-8 shadow-sm lg:p-12">
        <p class="text-center font-bold uppercase tracking-wider text-brand-blue">Reservasi Praktis</p><h1 class="mt-3 text-center text-3xl font-extrabold">Buat janji temu</h1><p class="mt-3 text-center text-slate-600">Isi formulir ini dan tim kami akan menghubungimu untuk mengonfirmasi jadwal.</p>
        <form class="mt-8 space-y-5" method="GET" action="https://wa.me/" onsubmit="return sendBooking(event)">
            <div><label for="nama" class="mb-2 block text-sm font-bold">Nama lengkap</label><input id="nama" name="nama" required autocomplete="name" class="w-full rounded-xl border border-slate-200 px-4 py-3 focus:border-brand-blue focus:outline-none" placeholder="Nama kamu"></div>
            <div><label for="telepon" class="mb-2 block text-sm font-bold">Nomor WhatsApp</label><input id="telepon" name="telepon" type="tel" required autocomplete="tel" class="w-full rounded-xl border border-slate-200 px-4 py-3 focus:border-brand-blue focus:outline-none" placeholder="08xxxxxxxxxx"></div>
            <div class="grid gap-5 sm:grid-cols-2"><div><label for="perawatan" class="mb-2 block text-sm font-bold">Layanan</label><select id="perawatan" name="perawatan" required class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3"><option value="">Pilih layanan</option><option>Pemeriksaan & konsultasi</option><option>Scaling gigi</option><option>Tambal gigi</option><option>Bleaching</option><option>Konsultasi behel</option></select></div><div><label for="tanggal" class="mb-2 block text-sm font-bold">Tanggal pilihan</label><input id="tanggal" name="tanggal" type="date" required class="w-full rounded-xl border border-slate-200 px-4 py-3"></div></div>
            <div><label for="catatan" class="mb-2 block text-sm font-bold">Catatan (opsional)</label><textarea id="catatan" name="catatan" rows="3" class="w-full rounded-xl border border-slate-200 px-4 py-3" placeholder="Ceritakan kebutuhan atau waktu yang diinginkan"></textarea></div>
            <button class="w-full rounded-xl bg-brand-yellow px-6 py-4 font-extrabold hover:bg-amber-400" type="submit">Lanjutkan konfirmasi WhatsApp</button>
            <p class="text-xs leading-5 text-slate-500">Formulir ini menyiapkan pesan WhatsApp untuk dikirim. Jadwal dianggap terkonfirmasi setelah tim klinik membalas.</p>
        </form>
    </div>
</section>
<script>
    const dateInput = document.getElementById('tanggal');
    dateInput.min = new Date().toLocaleDateString('en-CA');
    function sendBooking(event) {
        event.preventDefault();
        const form = event.currentTarget;
        const values = new FormData(form);
        const message = `Halo Toosmile Dental, saya ingin membuat janji.\nNama: ${values.get('nama')}\nWhatsApp: ${values.get('telepon')}\nLayanan: ${values.get('perawatan')}\nTanggal: ${values.get('tanggal')}\nCatatan: ${values.get('catatan') || '-'}`;
        window.location.href = `https://wa.me/?text=${encodeURIComponent(message)}`;
        return false;
    }
</script>
@endsection
