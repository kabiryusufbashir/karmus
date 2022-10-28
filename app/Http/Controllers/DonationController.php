<?php

namespace App\Http\Controllers;


use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Paystack;

use App\Models\Donation;


class DonationController extends Controller
{
    public function redirectToGateway(Request $request)
    {
        $words = 'KamusDictionary';
        $amount = $request->amount * 100;
        $reference = str_shuffle($words).time();
        $email = $request->email;
        $orderId = Str::random(4).time();
        $name = $request->name;
        $phone = $request->phone;

        $data = array(
            "amount" => $amount,
            "reference" => $reference,
            "email" => $email,
            "orderID" => $orderId,
            "first_name" => $name,
            "phone" => $phone,
            "currency" => "NGN",
        );

        try{
            Donation::create([
                'name' => $name,
                'email' => $email,
                'amount' => $amount,
                'phone' => $phone,
                'reference' => $reference,
                'status' => 'uncomplete',
            ]);

        }catch(Expection $e){
            return back()->with(['error' => 'Please try again later! ('.$e.')']);
        }

        try{
            return Paystack::getAuthorizationUrl($data)->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['error'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        // dd($paymentDetails);
        if($paymentDetails['data']['status'] == 'success'){
            
            $email =  $paymentDetails['data']['customer']['email'];
            $amount =  $paymentDetails['data']['amount'];
            $reference =  $paymentDetails['data']['reference'];

            try{
                Donation::select('reference', $reference)->update(['status' => 'Completed']);

                return redirect()->route('landing-page')->with('success', 'Thank you for your Donation!'); 
                
            }catch(Expection $e){
                return back()->with(['error' => 'Please try again later! ('.$e.')']);
            }
        }
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
