<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class GetAdvertisementController extends Controller
{
    public function __invoke(Request $request)
    {
        $valideAd = $request->validate(['id' => 'required|integer']);

        $ad = Ad::where('id', $valideAd['id'])->first();

        if ($ad !== null) {
            return $ad;
        }

        return response('not found', 404);
    }
}
