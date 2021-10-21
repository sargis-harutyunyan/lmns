<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Team;
use PHPUnit\TextUI\XmlConfiguration\Logging\TeamCity;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
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
