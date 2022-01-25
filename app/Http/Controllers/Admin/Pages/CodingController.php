<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class CodingController extends Controller
{
    public function index()
    {
        $data['top'] = Page::where('name', Page::CODING)
            ->where('place', Page::PLACE_TOP)
            ->first()
            ->toArray();
        $data['middle'] = Page::where('name', Page::CODING)
            ->where('place', Page::PLACE_MIDDLE)
            ->first()
            ->toArray();
        $data['middle_1'] = Page::where('name', Page::CODING)
            ->where('place', Page::PLACE_MIDDLE_SECTION_1)
            ->first()
            ->toArray();
        $data['middle_2'] = Page::where('name', Page::CODING)
            ->where('place', Page::PLACE_MIDDLE_SECTION_2)
            ->first()
            ->toArray();
        $data['middle_3'] = Page::where('name', Page::CODING)
            ->where('place', Page::PLACE_MIDDLE_SECTION_3)
            ->first()
            ->toArray();
        $data['bottom'] = Page::where('name', Page::CODING)
            ->where('place', Page::PLACE_BOTTOM)
            ->first()
            ->toArray();


        return view('admin.coding', compact('data'));
    }

    public function top(Request $request)
    {
        Page::where('name', Page::CODING)
            ->where('place', Page::PLACE_TOP)
            ->update(['content' => $request->get('vision')]);


        return redirect()->back();
    }

    public function middle(Request $request)
    {
        Page::where('name', Page::CODING)
            ->where('place', Page::PLACE_MIDDLE)
            ->update(['content' => $request->get('vision')]);


        return redirect()->back();
    }

    public function middleS1(Request $request)
    {
        Page::where('name', Page::CODING)
            ->where('place', Page::PLACE_MIDDLE_SECTION_1)
            ->update(['content' => $request->get('vision')]);


        return redirect()->back();
    }

    public function middleS2(Request $request)
    {
        Page::where('name', Page::CODING)
            ->where('place', Page::PLACE_MIDDLE_SECTION_2)
            ->update(['content' => $request->get('vision')]);


        return redirect()->back();
    }

    public function middleS3(Request $request)
    {
        Page::where('name', Page::CODING)
            ->where('place', Page::PLACE_MIDDLE_SECTION_3)
            ->update(['content' => $request->get('vision')]);


        return redirect()->back();
    }

    public function bottom(Request $request)
    {
        Page::where('name', Page::CODING)
            ->where('place', Page::PLACE_BOTTOM)
            ->update(['content' => $request->get('vision')]);


        return redirect()->back();
    }

}
