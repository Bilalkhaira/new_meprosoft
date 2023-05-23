<?php

namespace App\Http\Controllers;

use App\Models\NavMenu;
use Illuminate\Http\Request;
use App\Models\MenuPagesData;

class HomeMenuController extends Controller
{
    public function aboutUs()
    {
        $menu_id = NavMenu::where('name', 'About Mesprosoft')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.homeMenu.about', ['data' => $data]);
    }

    public function managementTeam()
    {
        $menu_id = NavMenu::where('name', 'Management Team')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.homeMenu.managementTeam', ['data' => $data]);
    }

    public function coreValues()
    {
        $menu_id = NavMenu::where('name', 'Core Values')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.homeMenu.coreValues', ['data' => $data]);
    }

    public function whyMesprosoft()
    {
        $menu_id = NavMenu::where('name', 'Why Mesprosoft')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.homeMenu.whyMesprosoft', ['data' => $data]);
    }
}
