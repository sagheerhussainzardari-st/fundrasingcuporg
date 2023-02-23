<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\SendEmail;
use App\Models\Category;
use App\Models\Fund;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class DiscoverController extends Controller
{
    public function index()
    {
        $fundraisers = Fund::latest()->take(4)->get();
        $categories = Category::take(4)->get();
        return view('front.discover',compact('fundraisers','categories'));
    }

    function sendMessage(Request $request){
        DB::table("contacts")->insert(["first_name" => $request->first_name,"last_name" => $request->last_name, "email" =>$request->email,"phone" =>$request->phone,"country" =>$request->country,"message" =>$request->message]);
        $user  = DB::table("contacts")->select("*")->where("email",'=',$request->email)->first();
        
        session(['user_send_message' => $user]);

        Mail::to("info@fundraisingcup.org")->send(new SendEmail());
        
        return redirect("/");
    }
}
