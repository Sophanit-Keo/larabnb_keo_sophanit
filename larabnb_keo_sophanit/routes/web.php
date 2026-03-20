<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = [
        ['id' => 1, 'name' => 'Cozy Cottage', 'location' => 'Lakeview', 'price' => 120, 'image' => 'https://source.unsplash.com/400x300/?cottage', 'bedroom' => 3, 'bathroom' => 2, ],
        ['id' => 2, 'name' => 'Modern Apartment', 'location' => 'Downtown', 'price' => 150, 'image' => 'https://source.unsplash.com/400x300/?apartment', 'bedroom' => 3, 'bathroom' => 2],
        ['id' => 3, 'name' => 'Beachfront Villa', 'location' => 'Seaside', 'price' => 300, 'image' => 'https://source.unsplash.com/400x300/?villa', 'bedroom' => 3, 'bathroom' => 2 ],
        ['id' => 4, 'name' => 'Mountain Cabin', 'location' => 'Highlands', 'price' => 200, 'image' => 'https://source.unsplash.com/400x300/?cabin', 'bedroom' => 3, 'bathroom' => 2],
        ['id' => 5, 'name' => 'Urban Loft', 'location' => 'City Center', 'price' => 180, 'image' => 'https://source.unsplash.com/400x300/?loft', 'bedroom' => 3, 'bathroom' => 2],
        ['id' => 6, 'name' => 'Country Farmhouse', 'location' => 'Countryside', 'price' => 220, 'image' => 'https://source.unsplash.com/400x300/?farmhouse', 'bedroom' => 3, 'bathroom' => 2],
    ];
    return view('home', ['products' => $products]);
})-> name('home');

Route::get('/property/{id}', function ($id) {
    $property = [
        1 => ['id' => 1, 'name' => 'Cozy Cottage', 'location' => 'Lakeview', 'rate' => 4.5, 'location' => 'Lakeview', 'rate' => 4.5, 'owner' => 'John Doe', 'bedroom' => 3, 'bathroom' => 2, 'description' => 'A charming cottage with stunning lake views, perfect for a relaxing getaway. Enjoy the cozy interior and outdoor amenities.', 'image' => 'https://source.unsplash.com/400x300/?cottage','price' => 120,],
        2 => ['id' => 2, 'name' => 'Modern Apartment', 'location' => 'Downtown', 'rate' => 4.0, 'owner' => 'Jane Smith', 'bedroom' => 3, 'bathroom' => 2, 'description' => 'Experience city living in this sleek apartment located in the heart of downtown. With modern amenities and vibrant surroundings, it’s ideal for urban explorers.', 'image' => 'https://source.unsplash.com/400x300/?apartment','price' => 150,],
        3 => ['id' => 3, 'name' => 'Beachfront Villa', 'location' => 'Seaside', 'rate' => 4.8, 'owner' => 'Alice Johnson', 'bedroom' => 3, 'bathroom' => 2, 'description' => 'Indulge in luxury at this beachfront villa, offering breathtaking ocean views and direct beach access. Perfect for a lavish vacation experience.', 'image' => 'https://source.unsplash.com/400x300/?villa','price' => 300,],
        4 => ['id' => 4, 'name' => 'Mountain Cabin', 'location' => 'Highlands', 'rate' => 4.3, 'owner' => 'Bob Brown', 'bedroom' => 3, 'bathroom' => 2, 'description' => 'Escape to the mountains in this cozy cabin surrounded by nature. Enjoy hiking trails and serene landscapes for a peaceful retreat.', 'image' => 'https://source.unsplash.com/400x300/?cabin','price' => 200,],
        5 => ['id' => 5, 'name' => 'Urban Loft', 'location' => 'City Center', 'rate' => 4.2, 'owner' => 'Charlie Davis', 'bedroom' => 3, 'bathroom' => 2, 'description' => 'Discover the vibrant city life in this stylish urban loft. With its modern design and central location, it’s perfect for those seeking excitement.', 'image' => 'https://source.unsplash.com/400x300/?loft','price' => 180,],
        6 => ['id' => 6, 'name' => 'Country Farmhouse', 'location' => 'Countryside', 'rate' => 4.6, 'owner' => 'Diana Evans', 'bedroom' => 3, 'bathroom' => 2, 'description' => 'Experience rustic charm in this country farmhouse surrounded by rolling hills. Enjoy the tranquility and scenic beauty of the countryside.', 'image' => 'https://source.unsplash.com/400x300/?farmhouse','price' => 220,],
    ];
    return view('property', ['property' => $property[$id] ?? null]);
})->name('property');