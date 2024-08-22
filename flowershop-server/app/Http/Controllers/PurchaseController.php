<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Mail\ConfirmationEmail;
use Illuminate\Support\Facades\Mail;

class PurchaseController extends Controller
{
    public function store(Request $request)
    {

        error_log($request);
        
        $validated = $this->validate($request, [
            'bouquet_id' => 'required',
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'delivery_address' => 'required|string|max:255',
            'delivery_method' => 'required|string',
        ]);
        
        $purchase = Purchase::create($validated);

        Mail::to("berkantgurcan@hotmail.com")->send(new ConfirmationEmail([
        ]));

        return response()->json($validated, 200);
    }
}
