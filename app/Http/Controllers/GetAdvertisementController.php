<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class GetAdvertisementController extends Controller
{
    public function __invoke()
    {
        return 'here is your ad, bitch';
    }
}
