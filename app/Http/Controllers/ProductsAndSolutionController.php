<?php

namespace App\Http\Controllers;

use App\Models\NavMenu;
use Illuminate\Http\Request;
use App\Models\MenuPagesData;

class ProductsAndSolutionController extends Controller
{
    public function index()
    {
        return view('pages.productAndSolution.index');
    }

    public function dispatchAutomation()
    {
        // $menu_id = NavMenu::where('name', 'Dispatch Automation')->first('id');

        // $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.dispatchAutomation');
    }

    public function dynamicMachineScheduling()
    {
        // $menu_id = NavMenu::where('name', 'Dynamic Machine Scheduling')->first('id');

        // $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.dynamicMachineScheduling');
    }

    public function electronicBatchManufacturing()
    {
        // $menu_id = NavMenu::where('name', 'Electronic Batch Manufacturing')->first('id');

        // $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.electronicBatchManufacturing');
    }

    public function handheldMobileBarCode()
    {
        // $menu_id = NavMenu::where('name', 'Handheld Mobile Bar Code')->first('id');

        // $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.handheldMobileBarCode');
    }

    public function loanManagementSolution()
    {
        // $menu_id = NavMenu::where('name', 'Loan Management Solution')->first('id');

        // $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.loanManagementSolution');
    }

    public function mesproGPSPreconfiguredAnalytics()
    {
        // $menu_id = NavMenu::where('name', 'Mespro GPS Preconfigured Analytics')->first('id');

        // $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.mesproGPSPreconfiguredAnalytics');
    }

    public function mesproLifeScienceCFRPart11()
    {
        // $menu_id = NavMenu::where('name', 'Mespro Life Science CFR Part 11')->first('id');

        // $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.mesproLifeScienceCFRPart11');
    }

    public function mesproOptimizedMRP()
    {
        // $menu_id = NavMenu::where('name', 'Mespro Optimized MRP')->first('id');

        // $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.mesproOptimizedMRP');
    }

    public function mesproPaperessManufacturing()
    {
        // $menu_id = NavMenu::where('name', 'Mespro Paper Less Manufacturing')->first('id');

        // $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.mesproPaperessManufacturing');
    }

    public function MesproX_Steps()
    {
        // $menu_id = NavMenu::where('name', 'Mespro X-Steps')->first('id');

        // $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.MesproX-Steps');
    }

    public function O2CAutomation()
    {
        // $menu_id = NavMenu::where('name', 'O2C Automation')->first('id');

        // $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.O2CAutomation');
    }

    public function purchaseBudgetCheckAndApproval()
    {
        // $menu_id = NavMenu::where('name', 'Purchase Budget Check & Approval')->first('id');

        // $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.purchaseBudgetCheckAndApproval');
    }

    public function smartFoundry()
    {
        // $menu_id = NavMenu::where('name', 'Smart Foundry')->first('id');

        // $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.smartFoundry');
    }

    public function TS16949CompliantKAPA()
    {
        // $menu_id = NavMenu::where('name', 'TS 16949 Compliant KAPA')->first('id');

        // $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.TS16949CompliantKAPA');
    }

    public function BTP()
    {
        // $menu_id = NavMenu::where('name', 'BTP')->first('id');

        // $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.BTP');
    }

    public function IOT()
    {
        // $menu_id = NavMenu::where('name', 'IOT')->first('id');

        // $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.IOT');
    }

    
}
