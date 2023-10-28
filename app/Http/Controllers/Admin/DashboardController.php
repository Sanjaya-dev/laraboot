<?php

namespace App\Http\Controllers\Admin;

use App\Models\Checkout;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $checkout = Checkout::with('Camp')->get();
        return view('admin.dashboard',[
            'checkouts' => $checkout
        ]);
    }
}
