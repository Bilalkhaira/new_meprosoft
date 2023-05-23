<?php

namespace App\Http\Controllers\Admin;

use File;
use Exception;
use App\Models\HomePage;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Http\Controllers\Controller;

class HomeControler extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.home');
    }


    public function homeSetting()
    {
        $slider1 = HomePage::where('for_section_identification', 'slider1')->get();
        $slider2 = HomePage::where('for_section_identification', 'slider2')->get();
        $satisfied_customer = HomePage::where('for_section_identification', 'satisfied_customer')->first();
        $satisfied_customer_images = HomePage::where('for_section_identification', 'satisfied_customer_img')->get();
        $building_efficiency = HomePage::where('for_section_identification', 'building_efficiency')->first();
        $our_services = HomePage::where('for_section_identification', 'our_services')->first();
        $our_product_and_solution = HomePage::where('for_section_identification', 'our_product_and_solution')->first();
        $percentage_section = HomePage::where('for_section_identification', 'percentage_section')->first();

        return view('admin.pages.home.index', ['percentage_section' => $percentage_section, 'slider1' => $slider1, 'slider2' => $slider2, 'satisfied_customer' => $satisfied_customer, 'satisfied_customer_images' => $satisfied_customer_images, 'building_efficiency' => $building_efficiency, 'our_services' => $our_services, 'our_product_and_solution' => $our_product_and_solution]);
    }

    public function storeNewSlide(Request $request)
    {
        $imgpath = public_path('img/homePage/');

        $destinationPath = $imgpath;
        $file = $request->img;
        $fileName = time() . '.' . $file->clientExtension();
        $file->move($destinationPath, $fileName);

        HomePage::create([
            'for_section_identification' => 'slider1',
            'images' => $fileName,
            'main_heading' => $request->heading,
            'links' => $request->link,
        ]);

        toastr()->success('Created Successfully');
        return redirect()->route('home.setting');
    }

    public function editSlide(Request $request)
    {
        $slideData = HomePage::find($request->slide_id);

        return response()->json($slideData);
    }

    public function updateSlide(Request $request)
    {
        $updated_row = HomePage::find($request->updated_id);

        $imgpath = public_path('img/homePage/');

        if (empty($request->img)) {

            $updateimage = $updated_row->images;
        } else {

            $imagePath =  $imgpath . $updated_row->images;

            if (File::exists($imagePath)) {

                File::delete($imagePath);
            }

            $destinationPath = $imgpath;
            $file = $request->img;
            $fileName = time() . '.' . $file->clientExtension();
            $file->move($destinationPath, $fileName);
            $updateimage = $fileName;
        }


        $updated_row->update([
            'images' => $updateimage,
            'main_heading' => $request->heading,
            'links' => $request->link,
        ]);


        toastr()->success('Updated Successfully');
        return redirect()->route('home.setting');
    }

    public function deleteSlide($id)
    {
        HomePage::find($id)->delete();

        toastr()->success('Delete Successfully');
        return redirect()->route('home.setting');
    }

    public function storeSatisfiedCustomer(Request $request)
    {
        HomePage::create([
            'for_section_identification' => 'satisfied_customer',
            'main_heading' => $request->heading,
            'text' => $request->text,
        ]);

        $imgpath = public_path('img/homePage/');

        foreach ($request->file('files') as $img) {

            $destinationPath = $imgpath;
            $file = $img;
            $fileName = time() . '.' . $file->clientExtension();
            $file->move($destinationPath, $fileName);

            HomePage::create([
                'for_section_identification' => 'satisfied_customer_img',
                'images' => $fileName,
            ]);
        }

        toastr()->success('Created Successfully');
        return redirect()->route('home.setting');
    }

    public function updateSatisfiedCustomer(Request $request)
    {
        $updated_row = HomePage::find($request->updated_id);
        $updated_row->update([
            'main_heading' => $request->heading,
            'text' => $request->text,
        ]);
        if (!empty($request->file('files'))) {
            $imgpath = public_path('img/homePage/');

            foreach ($request->file('files') as $img) {

                $destinationPath = $imgpath;
                $file = $img;
                $fileName = time() . '.' . $file->clientExtension();
                $file->move($destinationPath, $fileName);

                HomePage::create([
                    'for_section_identification' => 'satisfied_customer_img',
                    'images' => $fileName,
                ]);
            }
        }
        toastr()->success('Created Successfully');
        return redirect()->route('home.setting');
    }

    public function deleteSatisfiedCustomerImage($id)
    {
        $delete_row = HomePage::find($id);

        $imgpath = public_path('img/homePage/');

        $imagePath =  $imgpath . $delete_row->imges;

        if (File::exists($imagePath)) {

            File::delete($imagePath);
        }

        $delete_row->delete();

        toastr()->success('Delete Successfully');
        return redirect()->route('home.setting');
    }

    public function storebuildingEfficiency(Request $request)
    {
        $imgpath = public_path('img/homePage/');

        $destinationPath = $imgpath;
        $file = $request->img;
        $fileName = time() . '.' . $file->clientExtension();
        $file->move($destinationPath, $fileName);

        HomePage::create([
            'for_section_identification' => 'building_efficiency',
            'images' => $fileName,
            'main_heading' => $request->heading,
            'text' => $request->text,
        ]);

        toastr()->success('Created Successfully');
        return redirect()->route('home.setting');
    }

    public function updatebuildingEfficiency(Request $request)
    {

        $updated_row = HomePage::find($request->updated_id);

        $imgpath = public_path('img/homePage/');

        if (empty($request->img)) {

            $updateimage = $updated_row->images;
        } else {

            $imagePath =  $imgpath . $updated_row->images;

            if (File::exists($imagePath)) {

                File::delete($imagePath);
            }

            $destinationPath = $imgpath;
            $file = $request->img;
            $fileName = time() . '.' . $file->clientExtension();
            $file->move($destinationPath, $fileName);
            $updateimage = $fileName;
        }


        $updated_row->update([
            'images' => $updateimage,
            'main_heading' => $request->heading,
            'text' => $request->text,
        ]);


        toastr()->success('Updated Successfully');
        return redirect()->route('home.setting');
    }

    public function storeOurServices(Request $request)
    {
        $imgpath = public_path('img/homePage/');

        $destinationPath = $imgpath;
        $file = $request->img;
        $fileName = time() . '.' . $file->clientExtension();
        $file->move($destinationPath, $fileName);

        HomePage::create([
            'for_section_identification' => 'our_services',
            'images' => $fileName,
            'main_heading' => $request->heading,
            // 'others_heading' => $request->small_heading_one,
            // 'text' => $request->small_heading_two,
            // 'text2' => $request->small_heading_three,
            // 'links' => $request->small_heading_four,
        ]);

        toastr()->success('Created Successfully');
        return redirect()->route('home.setting');
    }

    public function updateOurServices(Request $request)
    {

        $updated_row = HomePage::find($request->updated_id);

        $imgpath = public_path('img/homePage/');

        if (empty($request->img)) {

            $updateimage = $updated_row->images;
        } else {

            $imagePath =  $imgpath . $updated_row->images;

            if (File::exists($imagePath)) {

                File::delete($imagePath);
            }

            $destinationPath = $imgpath;
            $file = $request->img;
            $fileName = time() . '.' . $file->clientExtension();
            $file->move($destinationPath, $fileName);
            $updateimage = $fileName;
        }


        $updated_row->update([
            'images' => $updateimage,
            'main_heading' => $request->heading,
            // 'others_heading' => $request->small_heading_one,
            // 'text' => $request->small_heading_two,
            // 'text2' => $request->small_heading_three,
            // 'links' => $request->small_heading_four,
        ]);


        toastr()->success('Updated Successfully');
        return redirect()->route('home.setting');
    }


    public function storeOurProductAndSolution(Request $request)
    {
        $imgpath = public_path('img/homePage/');

        $destinationPath = $imgpath;
        $file = $request->img;
        $fileName = time() . '.' . $file->clientExtension();
        $file->move($destinationPath, $fileName);

        HomePage::create([
            'for_section_identification' => 'our_product_and_solution',
            'images' => $fileName,
            'main_heading' => $request->heading,
            // 'others_heading' => $request->small_heading_one,
            // 'text' => $request->small_heading_two,
            // 'text2' => $request->small_heading_three,
            // 'links' => $request->small_heading_four,
        ]);

        toastr()->success('Created Successfully');
        return redirect()->route('home.setting');
    }

    public function updateOurProductAndSolution(Request $request)
    {

        $updated_row = HomePage::find($request->updated_id);

        $imgpath = public_path('img/homePage/');

        if (empty($request->img)) {

            $updateimage = $updated_row->images;
        } else {

            $imagePath =  $imgpath . $updated_row->images;

            if (File::exists($imagePath)) {

                File::delete($imagePath);
            }

            $destinationPath = $imgpath;
            $file = $request->img;
            $fileName = time() . '.' . $file->clientExtension();
            $file->move($destinationPath, $fileName);
            $updateimage = $fileName;
        }


        $updated_row->update([
            'images' => $updateimage,
            'main_heading' => $request->heading,
            // 'others_heading' => $request->small_heading_one,
            // 'text' => $request->small_heading_two,
            // 'text2' => $request->small_heading_three,
            // 'links' => $request->small_heading_four,
        ]);


        toastr()->success('Updated Successfully');
        return redirect()->route('home.setting');
    }


    public function storeSlider2NewSlide(Request $request)
    {
        // $imgpath = public_path('img/homePage/');

        // $destinationPath = $imgpath;
        // $file = $request->img;
        // $fileName = time() . '.' . $file->clientExtension();
        // $file->move($destinationPath, $fileName);

        HomePage::create([
            'for_section_identification' => 'slider2',
            // 'images' => $fileName,
            'text' => $request->exp,
            'rating_or_percentage' => $request->rating,
            'main_heading' => $request->auther_name,
            'others_heading' => $request->auther_profression,
        ]);

        toastr()->success('Created Successfully');

        return redirect()->route('home.setting');
    }

    public function editSlider2Slide(Request $request)
    {
        $slideData = HomePage::find($request->slide_id);
// dd($slideData);
        return response()->json($slideData);
    }

    public function updateSlider2Slide(Request $request)
    {
        $updated_row = HomePage::find($request->updated_id);

        // $imgpath = public_path('img/homePage/');

        // if (empty($request->img)) {

        //     $updateimage = $updated_row->images;
        // } else {

        //     $imagePath =  $imgpath . $updated_row->images;

        //     if (File::exists($imagePath)) {

        //         File::delete($imagePath);
        //     }

        //     $destinationPath = $imgpath;
        //     $file = $request->img;
        //     $fileName = time() . '.' . $file->clientExtension();
        //     $file->move($destinationPath, $fileName);
        //     $updateimage = $fileName;
        // }


        $updated_row->update([
            // 'images' => $updateimage,
            'text' => $request->exp,
            'rating_or_percentage' => $request->rating,
            'main_heading' => $request->auther_name,
            'others_heading' => $request->auther_profression,
        ]);


        toastr()->success('Updated Successfully');
        return redirect()->route('home.setting');
    }

    public function deleteSlider2Slide($id)
    {
        HomePage::find($id)->delete();

        toastr()->success('Delete Successfully');
        return redirect()->route('home.setting');
    }



    public function storePercentageSection(Request $request)
    {
        // $input = [
        //     'percentage' => $request->percentage,
        //     'percentage1' => $request->percentage1,
        //     'percentage2' => $request->percentage2,
        // ];
        $imgpath = public_path('img/homePage/');

        $destinationPath = $imgpath;
        $file = $request->img;
        $fileName = time() . '.' . $file->clientExtension();
        $file->move($destinationPath, $fileName);

        HomePage::create([
            'for_section_identification' => 'percentage_section',
            'images' => $fileName,
            'main_heading' => $request->heading,
            'text' => $request->text,
            // 'rating_or_percentage' => json_encode($input),
        ]);

        toastr()->success('Created Successfully');
        return redirect()->route('home.setting');
    }

    public function updatePercentageSection(Request $request)
    {
        // $input = [
        //     'percentage' => $request->percentage,
        //     'percentage1' => $request->percentage1,
        //     'percentage2' => $request->percentage2,
        // ];

        $updated_row = HomePage::find($request->updated_id);

        $imgpath = public_path('img/homePage/');

        if (empty($request->img)) {

            $updateimage = $updated_row->images;
        } else {

            $imagePath =  $imgpath . $updated_row->images;

            if (File::exists($imagePath)) {

                File::delete($imagePath);
            }

            $destinationPath = $imgpath;
            $file = $request->img;
            $fileName = time() . '.' . $file->clientExtension();
            $file->move($destinationPath, $fileName);
            $updateimage = $fileName;
        }


        $updated_row->update([
            'images' => $updateimage,
            'main_heading' => $request->heading,
            'text' => $request->text,
            // 'rating_or_percentage' => json_encode($input),
        ]);


        toastr()->success('Updated Successfully');
        return redirect()->route('home.setting');
    }
}
