<?php

namespace App\Http\Controllers\Admin\HomeMenu;

use File;
use Exception;
use App\Models\NavMenu;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\MenuPagesCardData;
use App\Models\MenuPagesData;
use App\Http\Controllers\Controller;

class MenuHomeController extends Controller
{
    public function index($id)
    {
        $services = NavMenu::with('children')->where('name', 'Corporate Overview')->get();

        $pageData = MenuPagesData::with('cards')->where('menu_id', $id)->first();

        if (empty($pageData)) {
            $menu_id = 3;
        } else {
            $menu_id = $pageData->menu_id;
        }

        return view('admin.pages.homeMenu.index', ['services_lists' => Arr::get($services, '0.children'), 'pageData' => $pageData, 'navbar_id' => $menu_id]);
    }

    public function getServicePage(Request $request)
    {
        $services = NavMenu::with('children')->where('name', 'Corporate Overview')->get();

        $pageData = MenuPagesData::with('cards')->where('menu_id', $request->navbar_id)->first();

        return view('admin.pages.homeMenu.index', ['services_lists' => Arr::get($services, '0.children'), 'pageData' => $pageData, 'navbar_id' => $request->navbar_id]);
    }

    public function createToSection(Request $request)
    {
        return view('admin.pages.homeMenu.createToSection', ['parent_id' => $request->nvbar_id]);
    }

    public function storeToSection(Request $request)
    {
        $imgpath = public_path('img/homeMenu/');

        $destinationPath = $imgpath;
        $file = $request->img;
        $fileName = time() . '.' . $file->clientExtension();
        $file->move($destinationPath, $fileName);

        $query = MenuPagesData::create([
            'menu_id' => $request->parent_id,
            'topSection_heading' => $request->heading,
            'topSection_explanation' => $request->explanation,
            'topSection_img' => $fileName
        ]);

        toastr()->success('Created Successfully');
        return redirect()->route('home/corporateOverview.index', $query->menu_id);
    }

    public function editToSection($id)
    {
        $topsectionData = MenuPagesData::find($id);

        return view('admin.pages.homeMenu.editToSection', ['topsectionData' => $topsectionData, 'update_id' => $id]);
    }

    public function updateToSection(Request $request, $id)
    {

        $updated_row = MenuPagesData::find($id);

        $imgpath = public_path('img/homeMenu/');

        if (empty($request->img)) {

            $updateimage = $updated_row->topSection_img;
        } else {

            $imagePath =  $imgpath . $updated_row->topSection_img;

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
            'topSection_heading' => $request->heading,
            'topSection_explanation' => $request->explanation,
            'topSection_img' => $updateimage
        ]);


        toastr()->success('Updated Successfully');
        return redirect()->route('home/corporateOverview.index', $updated_row->menu_id);
    }


    public function createExplanationSection($id)
    {
        return view('admin.pages.homeMenu.createExplanationSection', ['updated_id' => $id]);
    }


    public function storeExplanationSection(Request $request)
    {
        if ($request->img) {
            $imgpath = public_path('img/homeMenu/');

            $destinationPath = $imgpath;
            $file = $request->img;
            $fileName = time() . '.' . $file->clientExtension();
            $file->move($destinationPath, $fileName);
        } else {
            $fileName = '';
        }

        $updated_row = MenuPagesData::find($request->updated_id);

        $updated_row->update([
            'explanationSection_heading' => $request->heading,
            'explanationSection_explanation' => $request->exp,
            'explanationSection_img' => $fileName
        ]);


        toastr()->success('Created Successfully');
        return redirect()->route('home/corporateOverview.index', $updated_row->menu_id);
    }

    public function editExplanationSection($id)
    {
        $explanationSection = MenuPagesData::find($id);

        return view('admin.pages.homeMenu.editExplanationSection', ['explanationSection' => $explanationSection, 'update_id' => $id]);
    }

    public function updateExplanationSection(Request $request, $id)
    {

        $updated_row = MenuPagesData::find($id);

        $imgpath = public_path('img/homeMenu/');

        if (empty($request->img)) {

            $updateimage = $updated_row->explanationSection_img;
        } else {

            $imagePath =  $imgpath . $updated_row->explanationSection_img;

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
            'explanationSection_heading' => $request->heading,
            'explanationSection_explanation' => $request->exp,
            'explanationSection_img' => $updateimage
        ]);


        toastr()->success('Updated Successfully');
        return redirect()->route('home/corporateOverview.index', $updated_row->menu_id);
    }

    public function storeCard(Request $request)
    {
        $navbar_id = MenuPagesData::find($request->parent_id);

        MenuPagesCardData::create([
            'parent_id' => $request->parent_id,
            'heading' => $request->heading,
            'explanation' => json_encode($request->lists)
        ]);

        toastr()->success('Created Successfully');
        return redirect()->route('home/corporateOverview.index',  $navbar_id->menu_id);
    }

    public function updateCard(Request $request)
    {

        $updated_row = MenuPagesCardData::find($request->updated_cardId);

        $parrent = MenuPagesData::find($updated_row->parent_id);

        $updated_row->update([
            'heading' => $request->heading,
            'explanation' => json_encode($request->lists)
        ]);

        toastr()->success('Card Update Successfully');
        return redirect()->route('home/corporateOverview.index', $parrent->menu_id);
    }

    public function deleteCard($id)
    {
        $delete_row = MenuPagesCardData::find($id);

        $parrent = MenuPagesData::find($delete_row->parent_id);

        $delete_row->delete();

        toastr()->success('Card Delete Successfully');
        return redirect()->route('home/corporateOverview.index', $parrent->menu_id);
    }

    public function editCard(Request $request)
    {
        $cardData = MenuPagesCardData::find($request->card_id);
        $cardData = [
            'id' => $cardData->id,
            'heading' => $cardData->heading,
            'explanation' => json_decode($cardData->explanation),
        ];
        return response()->json($cardData);
    }

    public function deleteExplanationImage($id)
    {

        $updated_row = MenuPagesData::find($id);

        $imgpath = public_path('img/homeMenu/');

        $imagePath =  $imgpath . $updated_row->explanationSection_img;

        if (File::exists($imagePath)) {

            File::delete($imagePath);
        }

        $updated_row->update([
            'explanationSection_img' => ''
        ]);

        toastr()->success('Image Delete Successfully');
        return redirect()->route('home/corporateOverview.index', $updated_row->menu_id);
    }
}
