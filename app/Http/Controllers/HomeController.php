<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Team;
use PHPUnit\TextUI\XmlConfiguration\Logging\TeamCity;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];
        $data['top'] = Page::where('name', Page::HOME)
            ->where('place', Page::PLACE_TOP)
            ->first()
            ->toArray();
        $data['middle'] = Page::where('name', Page::HOME)
            ->where('place', Page::PLACE_MIDDLE)
            ->first()
            ->toArray();
        $data['middle_1'] = Page::where('name', Page::HOME)
            ->where('place', Page::PLACE_MIDDLE_SECTION_1)
            ->first()
            ->toArray();
        $data['middle_2'] = Page::where('name', Page::HOME)
            ->where('place', Page::PLACE_MIDDLE_SECTION_2)
            ->first()
            ->toArray();
        $data['middle_3'] = Page::where('name', Page::HOME)
            ->where('place', Page::PLACE_MIDDLE_SECTION_3)
            ->first()
            ->toArray();
        $data['bottom'] = Page::where('name', Page::HOME)
            ->where('place', Page::PLACE_BOTTOM)
            ->first()
            ->toArray();

        return view('home.index', compact('data'));
    }

    public function about()
    {
        $team = Team::all();
        $vision = Page::where('name', Page::ABOUT)->where('place', Page::PLACE_VISION)->first();
        $mission = Page::where('name', Page::ABOUT)->where('place', Page::PLACE_MISSION)->first();

        return view('home.about', compact('team', 'vision', 'mission'));
    }

    public function billing()
    {
        return view('home.billing');
    }

    public function coding()
    {
        return view('home.coding');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function support()
    {
        return view('home.support');
    }
}
