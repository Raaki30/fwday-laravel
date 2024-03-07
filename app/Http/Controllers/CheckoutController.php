<?php

namespace App\Http\Controllers;
namespace Midtrans;

use Illuminate\Http\Request;
use midtrans\Config;
use midtrans\Snap;

class CheckoutController extends Controller
{
    public function processPayment(Request $request)
    {
        // Fetch data from AJAX request
        $nama = $request->input('namaPengirim');
        $email = $request->input('email');
        $phone = $request->input('nomorTelepon');
        $amount = $request->input('hargaTotal');

        // Midtrans configuration
        Config::$serverKey = 'SB-Mid-server-N-S0Nmmooh4w-Yuk6EJPHr1m';
        Config::$clientKey = 'SB-Mid-client-U66AiCovKvOufMr_';
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $orderid = rand();

        $transaction_details = [
            'order_id' => $orderid,
            'gross_amount' => $amount,
        ];

        $customer_details = [
            'first_name'    => $nama,
            'last_name'     => "",
            'email'         => $email,
            'phone'         => $phone,
        ];

        $transaction = [
            'transaction_details'  => $transaction_details,
            'customer_details' => $customer_details
        ];

        $snap_token = '';
        try {
            $snap_token = Snap::getSnapToken($transaction);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }

        // Return response to AJAX request
        return response()->json([
            'snap_token' => $snap_token,
            'amount' => $amount
        ]);

        return view('checkout');
    }

    
}
