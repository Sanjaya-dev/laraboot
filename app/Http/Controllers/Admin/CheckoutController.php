<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Checkout\Paid;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function update(Request $request,Checkout $checkout)
    {
        $checkout->is_paid = true;
        $checkout->save();

        // send email
        Mail::to($checkout->User->email)->send(new Paid($checkout));

        //pemberitahuan jika update success
        $request->session()->flash('success',"Checkout with ID {$checkout->id} hes been updated");
        return redirect(route('admin.dashboard'));
    }
}
