<?php

namespace App\Http\Controllers;

use App\Models\NavMenu;
use Illuminate\Http\Request;
use App\Models\MenuPagesData;

class CareerController extends Controller
{
    public function index()
    {
        $menu_id = NavMenu::where('name', 'Career')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.careers.index', ['data' => $data]);
    }
}
