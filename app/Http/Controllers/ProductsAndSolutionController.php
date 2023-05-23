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
        $menu_id = NavMenu::where('name', 'Dispatch Automation')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.dispatchAutomation', ['data' => $data]);
    }

    public function dynamicMachineScheduling()
    {
        $menu_id = NavMenu::where('name', 'Dynamic Machine Scheduling')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.dynamicMachineScheduling', ['data' => $data]);
    }

    public function electronicBatchManufacturing()
    {
        $menu_id = NavMenu::where('name', 'Electronic Batch Manufacturing')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.electronicBatchManufacturing', ['data' => $data]);
    }

    public function handheldMobileBarCode()
    {
        $menu_id = NavMenu::where('name', 'Handheld Mobile Bar Code')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.handheldMobileBarCode', ['data' => $data]);
    }

    public function loanManagementSolution()
    {
        $menu_id = NavMenu::where('name', 'Loan Management Solution')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.loanManagementSolution', ['data' => $data]);
    }

    public function mesproGPSPreconfiguredAnalytics()
    {
        $menu_id = NavMenu::where('name', 'Mespro GPS Preconfigured Analytics')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.mesproGPSPreconfiguredAnalytics', ['data' => $data]);
    }

    public function mesproLifeScienceCFRPart11()
    {
        $menu_id = NavMenu::where('name', 'Mespro Life Science CFR Part 11')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.mesproLifeScienceCFRPart11', ['data' => $data]);
    }

    public function mesproOptimizedMRP()
    {
        $menu_id = NavMenu::where('name', 'Mespro Optimized MRP')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.mesproOptimizedMRP', ['data' => $data]);
    }

    public function mesproPaperessManufacturing()
    {
        $menu_id = NavMenu::where('name', 'Mespro Paper Less Manufacturing')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.mesproPaperessManufacturing', ['data' => $data]);
    }

    public function MesproX_Steps()
    {
        $menu_id = NavMenu::where('name', 'Mespro X-Steps')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.MesproX-Steps', ['data' => $data]);
    }

    public function O2CAutomation()
    {
        $menu_id = NavMenu::where('name', 'O2C Automation')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.O2CAutomation', ['data' => $data]);
    }

    public function purchaseBudgetCheckAndApproval()
    {
        $menu_id = NavMenu::where('name', 'Purchase Budget Check & Approval')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.purchaseBudgetCheckAndApproval', ['data' => $data]);
    }

    public function smartFoundry()
    {
        $menu_id = NavMenu::where('name', 'Smart Foundry')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.smartFoundry', ['data' => $data]);
    }

    public function TS16949CompliantKAPA()
    {
        $menu_id = NavMenu::where('name', 'TS 16949 Compliant KAPA')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.TS16949CompliantKAPA', ['data' => $data]);
    }

    public function BTP()
    {
        $menu_id = NavMenu::where('name', 'BTP')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.BTP', ['data' => $data]);
    }

    public function IOT()
    {
        $menu_id = NavMenu::where('name', 'IOT')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.productAndSolution.IOT', ['data' => $data]);
    }

    
}
