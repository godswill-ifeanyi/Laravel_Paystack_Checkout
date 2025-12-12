<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function pay(Request $request) {
        $request->validate([
            'price' => 'required|numeric|min:100',
            'product_id' => 'required|integer',
        ]);

        try {

            $url = "https://api.paystack.co/transaction/initialize";

            $fields = [
                'email' => Auth::user()->email,
                'amount' => intval($request->price) * 100,
                'reference' => Str::uuid(),
                'callback_url' => url('user/payment/callback'),
                'metadata' => [
                    'user_id' => Auth::id(),
                    'product_id' => $request->product_id,
                ],
            ];

            $fields_string = http_build_query($fields);

            //open connection
            $ch = curl_init();
            
            //set the url, number of POST vars, POST data
            curl_setopt($ch,CURLOPT_URL, $url);
            curl_setopt($ch,CURLOPT_POST, true);
            curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Authorization: Bearer ".env('PAYSTACK_SECRET_KEY'),
                "Cache-Control: no-cache",
            ));
            
            //So that curl_exec returns the contents of the cURL; rather than echoing it
            curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
            
            //execute post
            $result = curl_exec($ch);
            $res = json_decode($result, true);

            if ($res['status'] === true) {
                return redirect($res['data']['authorization_url']);
            }

            return redirect('user.products')->with('error', 'Request not successful');
        }
        catch(\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function handle_callback(Request $request) {
        $reference = $request->reference;

        // Concatenate the request reference variable
        $url = "https://api.paystack.co/transaction/verify/".$reference;

        // Initiate cURL
        $curl = curl_init();
  
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer ".env('PAYSTACK_SECRET_KEY'),
            "Cache-Control: no-cache",
            ),
        ));
        
        $response = curl_exec($curl);

        curl_close($curl);

        $res = json_decode($response, true);

        if ($res['status'] && $res['data']['status'] == "success") {
            Order::create([
                'reference' => $reference,
                'user_id' => $res['data']['metadata']['user_id'],
                'product_id' => $res['data']['metadata']['product_id'],
                'price' => $res['data']['amount'] / 100,
                'status' => 'success'
            ]);

            return redirect()->route('user.orders')->with('success', 'Payment successful');
        }

        return redirect()->back()->with('error', 'Payment not successful');
    }
}
