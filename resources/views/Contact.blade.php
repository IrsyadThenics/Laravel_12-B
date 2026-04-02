@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-8 py-20 flex flex-col items-center">
    <div class="w-full p-1 border border-lime-500/20 rounded-2xl">
        <div class="bg-zinc-950 p-12 rounded-xl border border-zinc-800 shadow-inner">
            <h2 class="font-neon text-2xl text-center mb-12 lime-text uppercase">Open_Channel</h2>
            <form class="space-y-8">
                <div class="relative group">
                    <input type="text" class="w-full bg-transparent border-b border-zinc-800 py-3 px-2 focus:outline-none focus:border-[#ccff00] transition-all text-white placeholder:text-zinc-800" placeholder="USER_NAME">
                </div>
                <div class="relative group">
                    <input type="email" class="w-full bg-transparent border-b border-zinc-800 py-3 px-2 focus:outline-none focus:border-[#ccff00] transition-all text-white placeholder-zinc-800" placeholder="CONNECTION_ADDR">
                </div>
                <div class="relative group">
                    <textarea rows="3" class="w-full bg-transparent border-b border-zinc-800 py-3 px-2 focus:outline-none focus:border-[#ccff00] transition-all text-white placeholder-zinc-800" placeholder="MESSAGE_PAYLOAD"></textarea>
                </div>
                <button class="group flex items-center space-x-4 text-[#ccff00] font-neon text-xs tracking-[0.5em] hover:translate-x-4 transition-all uppercase">
                    <span>Send_Signal</span>
                    <span class="h-px w-20 bg-[#ccff00] group-hover:w-40 transition-all"></span>
                </button>
            </form>
        </div>
    </div>
</div>
@endsection