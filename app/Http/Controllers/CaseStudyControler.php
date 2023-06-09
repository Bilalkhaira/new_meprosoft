<?php

namespace App\Http\Controllers;

use App\Models\NavMenu;
use Illuminate\Http\Request;
use App\Models\MenuPagesData;

class CaseStudyControler extends Controller
{
    public function foodIndustry()
    {
        // $menu_id = NavMenu::where('name', 'Food Industry')->first('id');

        // $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.caseStudy.foodIndustry');
    }

    public function machineToolIndustry()
    {
        return view('pages.caseStudy.machine_tool_industry');
    }

    public function SAPHospitalsCapability()
    {
        return view('pages.caseStudy.sap_Hospitals_capability');
    }

    public function SAPNBFC()
    {
        return view('pages.caseStudy.SAP_NBFC');
    }

    public function foodProcessingConsumerWare()
    {
        return view('pages.caseStudy.food_processing_consumer_ware');
    }

    public function manufacturing()
    {
        return view('pages.caseStudy.manufacturing');
    }

    public function pharmaceuticals()
    {
        return view('pages.caseStudy.pharmaceuticals');
    }

    public function automotiveComponents()
    {
        return view('pages.caseStudy.automotive_components');
    }

    public function foamPackagingProducts()
    {
        return view('pages.caseStudy.foam_packaging_products');
    }

    public function rubberandPolymers()
    {
        return view('pages.caseStudy.rubber_and_polymers');
    }

    public function AIRCRAFTIndustries()
    {
        return view('pages.caseStudy.AIRCRAFT_industries');
    }

    public function realEstateIndustries()
    {
        return view('pages.caseStudy.real_estate_industries');
    }

    public function UTILITIESIndustries()
    {
        return view('pages.caseStudy.UTILITIES_industries');
    }
}
