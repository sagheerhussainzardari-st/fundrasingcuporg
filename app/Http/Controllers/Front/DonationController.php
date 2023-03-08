<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\donations\StoreDonationRequest;
use App\Models\Fund;
use App\Services\StripeService;
use Illuminate\View\View;

class DonationController extends Controller
{
    final public function index(Fund $fund): View
    {
        return view('front.donate', compact('fund'));
    }

    public function donationPost(StoreDonationRequest $request): \Illuminate\Http\RedirectResponse
    {
        try {
            (new StripeService())->stripeCreate($request);
            return back();
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }
    }

    public function contact_us(){
        return view('front.contact-us');
    }
}
