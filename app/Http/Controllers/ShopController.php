<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index()
    {
        $shop = Shop::all();
        return view('shop.index', ['shop' => $shop]);
    }

    public function create()
    {
        return view('shop.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);

        $newShop = Shop::create($data);

        return redirect()->route('shop.index');
    }

    public function edit(Shop $shop)
    {
        return view('shop.edit', ['shop' => $shop]);
    }
}
