<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\ContactusNotification;

class NotificationController extends Controller
{
    public function allNotifiMarkAsRead(){
        $user = User::where('type', 'admin')->first();
        $user->unreadNotifications->markAsRead();
        toastr()->success('All Notifications Mark As Read Successfully');
        return redirect()->back();
    }
    public function notifiMarkAsRead(Request $request){
        $user = User::where('type', 'admin')->first();
        $user->unreadNotifications->where('id',$request->notifi_read_id)->markAsRead();

        return response()->json('true');
    }
    public function deleteAllNotification(){
        $user = User::where('type', 'admin')->first();
        $user->notifications()->delete();
        toastr()->success('All Notification Deleted Successfully');
        return redirect()->back();
    }
    public function deleteNotification(Request $request){
        $user = User::where('type', 'admin')->first();
        $user->notifications()->where('id',$request->notifi_read_id)->delete();
        toastr()->success('Notification Deleted Successfully');
        return response()->json('true');
    }

    public function notificationDetail($id) 
    {
        $user = User::where('type', 'admin')->first();
        $data = $user->notifications()->where('id',$id)->get();

        $user->unreadNotifications->where('id',$id)->markAsRead();
        
        return view('admin.pages.show_notification', ['notifi_detail' => $data]);
    }
}
