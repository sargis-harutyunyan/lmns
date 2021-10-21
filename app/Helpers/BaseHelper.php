<?php

namespace App\Helpers;


use App\Models\Setting;

class BaseHelper
{
    const PATH_FAVICON = 'images/admin/favicon/';
    const PATH_FOOTER_IMG = 'images/admin/footer/';
    const TEAM_IMG = 'images/admin/team/';

    public static function logo()
    {
        $settings = Setting::first();

        if ($settings and file_exists(public_path(Setting::PATH_LOGO . $settings->logo))) {
            return asset(Setting::PATH_LOGO . $settings->logo);
        }

        return asset('images/color_transparent_original.png');
    }

    public static function favicon()
    {
        $settings = Setting::first();

        if ($settings and file_exists(public_path(Setting::PATH_FAVICON . $settings->favicon))) {
            return asset(Setting::PATH_FAVICON . $settings->favicon);
        }

        return asset('images/LMNS_icon.png');
    }

    public static function footer()
    {
        $settings = Setting::first();
        if ($settings and file_exists(public_path(Setting::PATH_FOOTER_IMG . $settings->footer_img))) {
            return asset(Setting::PATH_FOOTER_IMG . $settings->footer_img);
        }

        return asset('images/color_transparent.png');
    }
}
