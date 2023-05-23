<?php

namespace App\Http\Controllers;

use App\Models\NavMenu;
use Illuminate\Http\Request;
use App\Models\MenuPagesData;

class ServiceController extends Controller
{
    public function index()
    {
        return view('pages.services.index');
    }

    public function businessConsulting()
    {
        $menu_id = NavMenu::where('name', 'Business Consulting')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.services.businessConsulting', ['data' => $data]);
    }

    public function digitalTransformationWithCloud()
    {
        $menu_id = NavMenu::where('name', 'Digital Transformation With Cloud')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.services.digitalTransformationWithCloud', ['data' => $data]);
    }

    public function hanaConversion()
    {
        $menu_id = NavMenu::where('name', 'S/4 Hana Conversions')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();
        
        return view('pages.services.hanaConversion', ['data' => $data]);
    }

    public function IPOCompliance()
    {
        $menu_id = NavMenu::where('name', 'IPO Compliance')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.services.IPOCompliance', ['data' => $data]);
    }

    public function PLCMESWeighBridgeIntegration()
    {
        $menu_id = NavMenu::where('name', 'PLC MES Weigh Bridge Integration')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.services.PLCMESWeighBridgeIntegration', ['data' => $data]);
    }

    public function resourceArgumentation()
    {
        $menu_id = NavMenu::where('name', 'Resource Argumentation')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.services.resourceArgumentation', ['data' => $data]);
    }

    public function applicationSupport()
    {
        $menu_id = NavMenu::where('name', 'Application Support')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.services.applicationSupport', ['data' => $data]);
    }

    public function specificConsulting()
    {
        $menu_id = NavMenu::where('name', 'Specific Consulting')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.services.specificConsulting', ['data' => $data]);
    }
}
