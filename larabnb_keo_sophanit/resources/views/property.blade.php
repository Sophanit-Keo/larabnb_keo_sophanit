@extends('layout.content')
@section('content')

<section class="max-w-6xl mx-auto px-4 py-6">
    <main class="max-w-7xl mx-auto px-6 py-12">
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-slate-900">{{ $property['name'] }}</h1>
            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-sm mt-3 text-slate-600">
                <span>📍 {{ $property['location'] }} </span>
                <span class="flex items-center gap-1">⭐Rating {{ $property['rate'] }}</span>
                <span class="underline font-medium decoration-slate-400">Hosted by {{ $property['owner'] }}</span>
            </div>
        </div>
        <x-listing-card>
            <x-main-card> <img src="{{ asset('images/master-bedroom.png') }}" alt="bedroom"
                    class="w-full h-full object-cover"> </x-main-card>
            <x-sub-card> <img src="{{ asset('images/bedroom.png') }}" alt="bedroom" class="w-full h-full object-cover">
            </x-sub-card>
            <x-sub-card> <img src="{{ asset('images/bathroom.png') }}" alt="bathroom"
                    class="w-full h-full object-cover"> </x-sub-card>
            <x-sub-card> <img src="{{ asset('images/kitchen.png') }}" alt="kitchen" class="w-full h-full object-cover">
            </x-sub-card>
            <x-sub-card> <img src="{{ asset('images/view.png') }}" alt="view"
                    class="w-full h-full object-cover"></x-sub-card>
        </x-listing-card>
        <div class="flex flex-col lg:flex-row gap-16">
            <div class="lg:w-2/3">
                <div class="border-b pb-8">
                    <h2 class="text-2xl font-bold mb-4">About this space</h2>
                    <div class="flex gap-6 text-slate-700 font-medium mb-6">
                        <span class="flex items-center gap-2">🛏️ {{ $property['bedroom'] }} Bedrooms</span>
                        <span class="flex items-center gap-2">🛁 {{ $property['bathroom'] }} Bathrooms</span>
                    </div>
                    <div class="space-y-6 text-slate-600 leading-relaxed max-w-2xl">
                        <p>{{ $property['description'] }}</p>
                    </div>
                </div>
            </div>

            <div class="lg:w-1/3">
                <div class="sticky top-8 border rounded-2xl p-6 shadow-xl shadow-slate-200/60 border-slate-200">
                    <div class="flex justify-between items-baseline mb-6">
                        <span class="text-2xl font-bold text-slate-900">${{ $property['price'] }}</span>
                        <span class="text-slate-500">/ night</span>
                    </div>

                    <div class="border rounded-xl mb-4 overflow-hidden border-slate-300">
                        <div class="grid grid-cols-2">
                            <div class="p-3 border-r border-b">
                                <label class="block text-[10px] font-bold uppercase text-slate-900">Check-In</label>
                                <input type="text" placeholder="mm/dd/yyyy"
                                    class="w-full text-sm outline-none bg-transparent">
                            </div>
                            <div class="p-3 border-b">
                                <label class="block text-[10px] font-bold uppercase text-slate-900">Check-Out</label>
                                <input type="text" placeholder="mm/dd/yyyy"
                                    class="w-full text-sm outline-none bg-transparent">
                            </div>
                        </div>
                    </div>

                    <button
                        class="w-full bg-[#FF385C] text-white font-bold py-3.5 rounded-xl hover:bg-[#E31C5F] transition-all active:scale-[0.98]">
                        Reserve Now
                    </button>
                    <p class="text-center text-xs text-slate-500 mt-4">You won't be charged yet</p>
                </div>
            </div>
        </div>
    </main>
</section>
@endsection