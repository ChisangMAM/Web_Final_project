<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paymentController extends Controller
{
    public function payment()
    {
        $order = orders::all();
        return view('payment', compact('payment'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
         'receive_date' => '',
         'pickup_date' => '',
         'delivery_company' => '',
         'payment' => '',
         'location' => ''
     ]);
     $order = order::create($validatedData);

     return redirect('/checkout')->with('success', 'Your detail is successfully saved');
    }
}
}
?>

