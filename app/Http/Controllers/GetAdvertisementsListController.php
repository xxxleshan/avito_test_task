<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Ad;

class GetAdvertisementsListController extends Controller
{
    public function __invoke()
    {
        return Ad::paginate(2);
    }
}
