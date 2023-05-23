<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Models\MenuPagesData;
use App\Http\Controllers\Controller;

class FAQController extends Controller
{
    public function index()
    {
        $sectionData = Faq::whereNotNull('heading')->first();
        $quesAns = Faq::whereNull('heading')->get(); 

        return view('admin.pages.faq.index', ['sectionData' => $sectionData, 'quesAns' => $quesAns]);
    }

    public function create()
    {
        return view('admin.pages.faq.create');
    }

    public function edit($id)
    {
        $sectionData = Faq::whereNotNull('heading')->first();
        $quesAns = Faq::whereNull('heading')->get();

        return view('admin.pages.faq.edit', ['sectionData' => $sectionData, 'quesAns' => $quesAns]);
    }

    public function storeFaq(Request $request)
    {

        Faq::create([
            'heading' => $request->heading,
            'exp' => $request->exp,
        ]);

        foreach ($request->question as $key => $val) {

            Faq::create([
                'questions' => $val,
                'ans' => $request->ans[$key],
            ]);
        }

        toastr()->success('Created Successfully');
        return redirect()->route('faq.index');
    }

    public function update(Request $request, $id)
    {

        $updated_row = Faq::find($id);

        $updated_row->update([
            'heading' => $request->heading,
            'exp' => $request->exp,
        ]);

        Faq::whereNull('heading')->delete();

        foreach ($request->question as $key => $val) {

            Faq::create([
                'questions' => $val,
                'ans' => $request->ans[$key],
            ]);
        }

        toastr()->success('Update Successfully');
        return redirect()->route('faq.index');
    }

    public function deleteFaqQues($id) 
    {
        Faq::find($id)->delete();

        toastr()->success('Delete Successfully');
        return redirect()->route('faq.index');
    }
}
