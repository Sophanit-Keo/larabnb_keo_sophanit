@extends('layout.content')
@section('content')

<section class="max-w-6xl mx-auto px-4 py-6">
    <main class="max-w-7xl mx-auto px-6 py-12">
        <header class="mb-10">
            <h1 class="text-3xl font-bold text-slate-900">Explore Stays</h1>
            <p class="text-slate-500 mt-1">Book unique places to stay and things to do.</p>
        </header>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-10">
            @foreach ($products as $product)
    <div class="group cursor-pointer justify-between">
        <div class="aspect-square overflow-hidden rounded-2xl bg-gray-100 mb-3">
            <a href="{{ route('property.show', ['id' => $product['id']]) }}">
            <img src="{{ $product['image'] ?? 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=800&q=80' }}"
                 alt="{{ $product['name'] }}"
                 class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-300">
            </a>
        </div>
        
        <div class="flex justify-between items-start">
            <div>
                <h3 class="font-semibold text-slate-900">{{ $product['name'] }}</h3>
                <p class="text-sm text-slate-500">
                    {{ $product['bedroom'] ?? '0' }} beds • {{ $product['bathroom'] ?? '0' }} baths
                </p>
            </div>
            <p class="font-semibold text-slate-900">
                ${{ $product['price'] }} 
                <span class="font-light text-slate-500 text-sm">/ night</span>
            </p>
        </div>
    </div>
@endforeach
            </div>
        </div>
    </main>
</section>
@endsection