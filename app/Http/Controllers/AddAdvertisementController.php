<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;
use Faker\Provider\de_CH\Address;

class AddAdvertisementController extends Controller
{
    public function __invoke(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string',
            'price' => 'required|integer',
            'photo_link' => 'required|string',
            'description' => 'string'

        ]);

        $ad = new Ad();

        $ad->name =  $validated['name'];
        $ad->price = $validated['price'];
        $ad->photo_link = $validated['photo_link'];
        $ad->description = $validated['description'] ?? '';

        $ad->save();

        return response($ad, 201);
    }
}
