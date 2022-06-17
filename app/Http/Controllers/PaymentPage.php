<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentPage extends Controller
{
    public function index (Request $request) {
        return view('payment');
    }

    public function verify ($reference) {
        $sec = "sk_test_9f54ee72aa303009772ebb20568b5b9031cd7dac";
        $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer $sec",
        "Cache-Control: no-cache",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $new_data = json_decode($response);
        return [$new_data];
    }
}
