<?php

namespace App\Http\Controllers\Admin\Careers;

use File;
use Exception;
use App\Models\NavMenu;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\MenuPagesCardData;
use App\Models\MenuPagesData;
use App\Http\Controllers\Controller;

class CareersController extends Controller
{
    public function index($id)
    {
        $pageData = MenuPagesData::with('cards')->where('menu_id', $id)->first();

        if (empty($pageData)) {
            $menu_id = 41;
        } else {
            $menu_id = $pageData->menu_id;
        }

        return view('admin.pages.career.index', ['pageData' => $pageData, 'navbar_id' => $menu_id]);
    }

    public function createToSection(Request $request)
    {
        return view('admin.pages.career.createToSection', ['parent_id' => $request->nvbar_id]);
    }

    public function storeToSection(Request $request)
    {
        $imgpath = public_path('img/careers/');

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
        return redirect()->route('career.index', $query->menu_id);
    }

    public function editToSection($id)
    {
        $topsectionData = MenuPagesData::find($id);

        return view('admin.pages.career.editToSection', ['topsectionData' => $topsectionData, 'update_id' => $id]);
    }

    public function updateToSection(Request $request, $id)
    {

        $updated_row = MenuPagesData::find($id);

        $imgpath = public_path('img/careers/');

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
        return redirect()->route('career.index', $updated_row->menu_id);
    }


    public function storeNewJob(Request $request)
    {
        $navbar_id = MenuPagesData::find($request->parent_id);

        MenuPagesCardData::create([
            'parent_id' => $request->parent_id,
            'heading' => 'abc',
            'explanation' => json_encode($request->exp)
        ]);

        toastr()->success('Created Successfully');
        return redirect()->route('career.index',  $navbar_id->menu_id);
    }

    public function updateJob(Request $request)
    {
        $updated_row = MenuPagesCardData::find($request->updated_cardId);

        $parrent = MenuPagesData::find($updated_row->parent_id);

        $updated_row->update([
            'explanation' => json_encode($request->job_exp)
        ]);

        toastr()->success('Job Update Successfully');
        return redirect()->route('career.index', $parrent->menu_id);
    }

    public function deleteJob($id)
    {
        $delete_row = MenuPagesCardData::find($id);

        $parrent = MenuPagesData::find($delete_row->parent_id);

        $delete_row->delete();

        toastr()->success('Card Delete Successfully');
        return redirect()->route('career.index', $parrent->menu_id);
    }

    public function editJob(Request $request)
    {
        $cardData = MenuPagesCardData::find($request->card_id);
        $cardData = [
            'id' => $cardData->id,
            'heading' => $cardData->heading,
            'explanation' => json_decode($cardData->explanation),
        ];
        return response()->json($cardData);
    }

    public function editCurrentOpeningSection(Request $request)
    {
        $cardData = MenuPagesCardData::find($request->card_id);
        $cardData = [
            'id' => $cardData->id,
            'explanation' => json_decode($cardData->explanation),
        ];
        return response()->json($cardData);
    }

    public function updateCurrentOpeningSection(Request $request)
    {
        $updated_row = MenuPagesCardData::find($request->currentOpeningTextarea_parent_id);

        $parrent = MenuPagesData::find($updated_row->parent_id);

        $updated_row->update([
            'explanation' => json_encode($request->exp)
        ]);

        toastr()->success('Card Update Successfully');
        return redirect()->route('career.index', $parrent->menu_id);
    }

    public function storeCurrentOpeningSection(Request $request)
    {
        
        $navbar_id = MenuPagesData::find($request->parent_id);

        MenuPagesCardData::create([
            'parent_id' => $request->parent_id,
            'explanation' => json_encode($request->exp)
        ]);

        toastr()->success('Created Successfully');
        return redirect()->route('career.index',  $navbar_id->menu_id);
    }
}
