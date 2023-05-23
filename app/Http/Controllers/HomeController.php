<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\HomePage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
       
    //     return view('home');
    // }

    public function home()
    {
        $slider1 = HomePage::where('for_section_identification', 'slider1')->get();
        $slider2 = HomePage::where('for_section_identification', 'slider2')->get();
        $satisfied_customer = HomePage::where('for_section_identification', 'satisfied_customer')->first();
        $satisfied_customer_images = HomePage::where('for_section_identification', 'satisfied_customer_img')->get();
        $building_efficiency = HomePage::where('for_section_identification', 'building_efficiency')->first();
        $our_services = HomePage::where('for_section_identification', 'our_services')->first();
        $our_product_and_solution = HomePage::where('for_section_identification', 'our_product_and_solution')->first();
        $percentage_section = HomePage::where('for_section_identification', 'percentage_section')->first();

        $faqSec = Faq::whereNotNull('heading')->first();
        $faqQuesAns = Faq::whereNull('heading')->get(); 
        
        return view('welcome', ['faqSec' => $faqSec,'faqQuesAns' => $faqQuesAns,'percentage_section' => $percentage_section,'slider1' => $slider1, 'slider2' => $slider2, 'satisfied_customer' => $satisfied_customer, 'satisfied_customer_images' => $satisfied_customer_images, 'building_efficiency' => $building_efficiency, 'our_services' => $our_services, 'our_product_and_solution' => $our_product_and_solution]);
    }
}
