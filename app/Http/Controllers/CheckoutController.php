<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Plan;

class CheckoutController extends Controller
{
    public function index(Request $request){
        $plans = Plan::get();
        $intent = $request->user()->createSetupIntent();
       return view('plan',  compact('plans', 'intent'));
    }
    public function store(Request $request){
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'payment_method' => 'required',
            'plan' => 'required|exists:plans,id'
        ]);



        $plan = Plan::find($request->plan);

        $request
            ->user()
            ->newSubscription('default', $plan->stripe_id)
            ->create($request->payment_method);

        return view('payment.success');
    }
}
