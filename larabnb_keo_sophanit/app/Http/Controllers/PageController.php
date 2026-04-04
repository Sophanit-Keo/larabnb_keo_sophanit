<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $products = [
        ['id' => 1, 'name' => 'Cozy Cottage', 'location' => 'Lakeview', 'price' => 120, 'image' => 'https://source.unsplash.com/400x300/?cottage', 'bedroom' => 3, 'bathroom' => 2, ],
        ['id' => 2, 'name' => 'Modern Apartment', 'location' => 'Downtown', 'price' => 150, 'image' => 'https://source.unsplash.com/400x300/?apartment', 'bedroom' => 3, 'bathroom' => 2],
        ['id' => 3, 'name' => 'Beachfront Villa', 'location' => 'Seaside', 'price' => 300, 'image' => 'https://source.unsplash.com/400x300/?villa', 'bedroom' => 3, 'bathroom' => 2 ],
        ['id' => 4, 'name' => 'Mountain Cabin', 'location' => 'Highlands', 'price' => 200, 'image' => 'https://source.unsplash.com/400x300/?cabin', 'bedroom' => 3, 'bathroom' => 2],
        ['id' => 5, 'name' => 'Urban Loft', 'location' => 'City Center', 'price' => 180, 'image' => 'https://source.unsplash.com/400x300/?loft', 'bedroom' => 3, 'bathroom' => 2],
        ['id' => 6, 'name' => 'Country Farmhouse', 'location' => 'Countryside', 'price' => 220, 'image' => 'https://source.unsplash.com/400x300/?farmhouse', 'bedroom' => 3, 'bathroom' => 2],
        ];
        return view('home', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
