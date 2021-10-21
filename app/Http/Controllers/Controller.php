<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Setting;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $settings = Setting::first();
        if (!$settings) {
            $settings = new Setting();
        }

        $pages = Page::groupBy('name')->get();

        View::share('settings', $settings);
        View::share( 'pages', $pages);
    }
}
