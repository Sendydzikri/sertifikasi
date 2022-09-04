<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PageController extends BaseController
{
    public function about_us()
    {
        return view('pages/about_us');
    }
}
