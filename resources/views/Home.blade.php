@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10" x-data="{ selectedCourt: null }">
    <div class="mb-12 text-center">
        <h1 class="text-4xl font-neon lime-text mb-2">FIELD_SELECTION</h1>
        <p class="text-zinc-500 text-xs tracking-widest">MAP_VERSION_2.0 // SELECT AVAILABLE SECTOR</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
        <div class="lg:col-span-2 bg-zinc-900/20 border border-zinc-800 p-8 rounded-3xl relative overflow-hidden">
            <div class="grid grid-cols-2 gap-6 relative z-10">
                @foreach(['COURT_A', 'COURT_B', 'COURT_C', 'COURT_D'] as $court)
                <div @click="selectedCourt = '{{ $court }}'" 
                     :class="selectedCourt === '{{ $court }}' ? 'border-[#ccff00] bg-[#ccff00]/10' : 'border-zinc-800 bg-black/40'"
                     class="h-48 rounded-xl border-2 flex flex-col items-center justify-center cursor-pointer transition-all hover:shadow-[0_0_20px_rgba(204,255,0,0.2)] group">
                    <div :class="selectedCourt === '{{ $court }}' ? 'bg-[#ccff00]' : 'bg-zinc-800'" class="w-12 h-1 mb-4"></div>
                    <span class="font-neon text-sm" :class="selectedCourt === '{{ $court }}' ? 'text-[#ccff00]' : 'text-zinc-500'">{{ $court }}</span>
                </div>
                @endforeach
            </div>
            <div class="absolute inset-0 pointer-events-none opacity-20 bg-[radial-gradient(circle,rgba(204,255,0,0.1)_1px,transparent_1px)] bg-[size:20px_20px]"></div>
        </div>

        <div class="bg-zinc-950 border border-lime-500/30 p-8 rounded-3xl shadow-[0_0_30px_rgba(0,0,0,1)]">
            <h2 class="font-neon text-sm text-zinc-400 mb-6 uppercase tracking-tighter">Sector_Data</h2>
            <template x-if="selectedCourt">
                <div class="space-y-6">
                    <div class="text-3xl font-neon text-white" x-text="selectedCourt"></div>
                    <div class="space-y-4">
                        <p class="text-xs text-zinc-500">AVAILABLE_TIME_SLOTS:</p>
                        <div class="grid grid-cols-2 gap-2">
                            @foreach(['16:00', '18:00', '20:00', '22:00'] as $time)
                                <button class="py-2 border border-zinc-800 rounded text-[10px] hover:border-[#ccff00] hover:text-[#ccff00] transition">{{ $time }}</button>
                            @endforeach
                        </div>
                    </div>
                    <button class="w-full py-4 bg-[#ccff00] text-black font-neon font-bold text-xs tracking-widest hover:brightness-110 active:scale-95 transition">INITIALIZE_BOOKING</button>
                </div>
            </template>
            <template x-if="!selectedCourt">
                <div class="h-full flex items-center justify-center text-zinc-700 italic text-sm">
                    WAITING_FOR_INPUT...
                </div>
            </template>
        </div>
    </div>
</div>
@endsection