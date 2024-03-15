<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Announcement;
use App\Models\User;
use App\Models\Notification;
Use Illuminate\Support\Facades\Mail;
use App\Mail\ContactVendor;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;


class AccountController extends Controller
{
    public function insertAnnouncement()
    {
        return view('accounts.insert_announcement');
    }

    public function showAnnouncements()
    {
        $announcements = Announcement::all();
        return view('accounts.show-announcements', compact('announcements'));
    }
    
    public function notificationIndex()
    {
        $notifications = Notification::where('view',false)->where('user_id',Auth::user()->id)->orderBy('id', 'DESC')->get();
    ;

        return view("accounts.notification_index",compact('notifications'));
    }

    

    
}
