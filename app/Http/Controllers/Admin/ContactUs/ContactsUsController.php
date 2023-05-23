<?php

namespace App\Http\Controllers\Admin\ContactUs;

use File;
use Exception;
use App\Models\NavMenu;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\MenuPagesCardData;
use App\Models\MenuPagesData;
use App\Http\Controllers\Controller;

class ContactsUsController extends Controller
{
    public function index($id)
    {
        $pageData = MenuPagesData::with('cards')->where('menu_id', $id)->first();
        if (empty($pageData)) {
            $menu_id = 42;
        } else {
            $menu_id = $pageData->menu_id;
        }

        return view('admin.pages.contactUs.index', ['pageData' => $pageData, 'navbar_id' => $menu_id]);
    }

    public function createToSection(Request $request)
    {
        return view('admin.pages.contactUs.createToSection', ['parent_id' => $request->nvbar_id]);
    }

    public function storeToSection(Request $request)
    {
        $imgpath = public_path('img/contactUs/');

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
        return redirect()->route('contactUs.index', $query->menu_id);
    }

    public function editToSection($id)
    {
        $topsectionData = MenuPagesData::find($id);

        return view('admin.pages.contactUs.editToSection', ['topsectionData' => $topsectionData, 'update_id' => $id]);
    }

    public function updateToSection(Request $request, $id)
    {

        $updated_row = MenuPagesData::find($id);

        $imgpath = public_path('img/contactUs/');

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
        return redirect()->route('contactUs.index', $updated_row->menu_id);
    }


    

    public function deleteCard($id)
    {
        $delete_row = MenuPagesCardData::find($id);

        $parrent = MenuPagesData::find($delete_row->parent_id);

        $delete_row->delete();

        toastr()->success('Card Delete Successfully');
        return redirect()->route('contactUs.index', $parrent->menu_id);
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

    public function updateCard(Request $request)
    {
        $input = [
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email
        ];
       
        $updated_row = MenuPagesCardData::find($request->parent_id);
        $parrent = MenuPagesData::find($updated_row->parent_id);

        $updated_row->update([
            'heading' => $request->country,
            'explanation' => json_encode($input)
        ]);

        toastr()->success('Card Update Successfully');
        return redirect()->route('contactUs.index', $parrent->menu_id);
    }


    public function storeCard(Request $request)
    {
        
        $input = [
            'address' => $request->address,
            'phone' => $request->phone ?? '',
            'email' => $request->email ?? ''
        ];
        $navbar_id = MenuPagesData::find($request->parent_id);

        MenuPagesCardData::create([
            'parent_id' => $request->parent_id,
            'heading' => $request->country,
            'explanation' => json_encode($input)
        ]);

        toastr()->success('Created Successfully');
        return redirect()->route('contactUs.index',  $navbar_id->menu_id);
    }
    
}
