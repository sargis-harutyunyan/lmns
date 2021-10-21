<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        if (!$settings) {
            $settings = new Setting();
        }

        return view('admin.settings', compact('settings'));
    }

    public function store(Request $request)
    {
        $settings = Setting::first();
        if (!$settings) {
            $settings = new Setting();
        }
        $request->validate([
            'email' => 'email|required',
            'phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10|required',
            'address' => 'regex:/(^[-0-9A-Za-z.,\/ ]+$)/||min:5|required',
            'facebook' => 'url|required',
            'twitter' => 'url|required',
            'linkedin' => 'url|required',
        ]);

        foreach ($request->except('_token') as $key => $value) {
            $settings->$key = $value;
        }
        $settings->save();

        return redirect()->back()->with(['succss' => true]);
    }

    function favicon(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'favicon' => 'required|image|mimes:jpeg,png,jpg,gif|max:512'
        ]);

        if($validation->passes()) {
            (new Filesystem())->cleanDirectory(Setting::PATH_FAVICON);

            $image = $request->file('favicon');
            $new_name = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path(Setting::PATH_FAVICON), $new_name);

            $settings = Setting::first();
            if (!$settings) {
                $settings = new Setting();
            }

            $settings->favicon = $new_name;
            $settings->save();


            return response()->json([
                'success' => true,
                'image' => Setting::PATH_FAVICON . $new_name
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message'   => $validation->errors()->all()
            ]);
        }
    }

    function logo(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if($validation->passes()) {
            (new Filesystem())->cleanDirectory(Setting::PATH_LOGO);
            $image = $request->file('logo');
            $new_name = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path(Setting::PATH_LOGO), $new_name);

            $settings = Setting::first();
            if (!$settings) {
                $settings = new Setting();
            }

            $settings->logo = $new_name;
            $settings->save();

            return response()->json([
                'success' => true,
                'image' => Setting::PATH_LOGO . $new_name
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message'   => $validation->errors()->all()
            ]);
        }
    }

    function footer(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'footer-img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if($validation->passes()) {
            (new Filesystem())->cleanDirectory(Setting::PATH_FOOTER_IMG);
            $image = $request->file('footer-img');
            $new_name = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path(Setting::PATH_FOOTER_IMG), $new_name);

            $settings = Setting::first();
            if (!$settings) {
                $settings = new Setting();
            }

            $settings->footer_img = $new_name;
            $settings->save();

            return response()->json([
                'success' => true,
                'image' => Setting::PATH_FOOTER_IMG . $new_name
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message'   => $validation->errors()->all()
            ]);
        }
    }
}
