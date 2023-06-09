<?php

namespace App\Http\Controllers;

use App\Models\NavMenu;
use Illuminate\Http\Request;
use App\Models\MenuPagesData;

class NewsAndEventController extends Controller
{
    public function index()
    {
        // $menu_id = NavMenu::where('name', 'News & Event')->first('id');

        // $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.eventAndNews.index');
    }
    public function event()
    {
        return view('pages.eventAndNews.events');
    }

    public function news()
    {
        return view('pages.eventAndNews.news');
    }

    public function eventDetail()
    {
        return view('pages.eventAndNews.event_detail');
    }
}
