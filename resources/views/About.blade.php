@extends('layouts.app')

@section('content')
<section class="max-w-5xl mx-auto px-8 py-16">
    <div class="border-l-2 border-[#ccff00] pl-8 space-y-12">
        <div class="space-y-4">
            <h1 class="text-6xl font-neon font-bold tracking-tighter italic">OUR_DNA</h1>
            <p class="text-xl text-zinc-400 max-w-2xl leading-relaxed">
                Arena Grid adalah sistem manajemen lapangan berbasis <span class="text-[#ccff00]">Neural-Sync</span>. Kami mengoptimalkan setiap milidetik waktu olahraga Anda.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-10">
            <div class="p-6 bg-zinc-900/30 border border-zinc-800">
                <h3 class="text-[#ccff00] font-neon text-xs mb-2 uppercase">Precision_Engine</h3>
                <p class="text-zinc-500 text-sm">Akurasi data hingga 0.001 detik untuk jadwal yang tidak pernah tumpang tindih.</p>
            </div>
            <div class="p-6 bg-zinc-900/30 border border-zinc-800">
                <h3 class="text-[#ccff00] font-neon text-xs mb-2 uppercase">Lume_Control</h3>
                <p class="text-zinc-500 text-sm">Integrasi otomatis dengan pencahayaan stadion via protokol IoT.</p>
            </div>
        </div>
    </div>
</section>
@endsection