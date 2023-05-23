<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\NavMenu;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Models\MenuPagesData;

class ContactusController extends Controller
{
    public function save(Request $request) 
    {
        $user = User::where('type', 'admin')->first();

        $details = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'department' => $request->department,
            'company' => $request->company,
            'city' => $request->city,
            'message' => $request->message,
        ];

        $user->notify(new \App\Notifications\ContactusNotification($details));


        $user = User::where('email', 'sales@mesprosoft.com')->first();
        
        $details = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'department' => $request->department,
            'company' => $request->company,
            'city' => $request->city,
            'message' => $request->message,
        ];

        $user->notify(new \App\Notifications\ContactusNotification($details));

        $user = User::where('email', 'info@mesprosoft.com')->first();
        
        $details = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'department' => $request->department,
            'company' => $request->company,
            'city' => $request->city,
            'message' => $request->message,
        ];

        $user->notify(new \App\Notifications\ContactusNotification($details));

        toastr()->success('Message Send Successfully');

        return back();
        
    }

    public function index()
    {
        $menu_id = NavMenu::where('name', 'Contact Us')->first('id');

        $data = MenuPagesData::with('cards')->where('menu_id', $menu_id->id)->first();

        return view('pages.contactUs.contactUs', ['data' => $data]);
    }
}