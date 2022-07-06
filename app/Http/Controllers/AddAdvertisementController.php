<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class AddAdvertisementController extends Controller
{
    public function __invoke()
    {
        return ['status' => 'ok', 'link' => 'links 2 3 4'];
    }
}
