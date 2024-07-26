<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iamolayemi\Paystack\Facades\Paystack;
use App\Models\Ad;


class PaymentController extends Controller
{   
    protected $ads_id;

    
    public function __construct()
    {
        // Initialize the variable with a default value
        $this->ads_id = 0;
    }
    
    public function getId()
    {
        return $this->ads_id;
    }
    
    public function setId($value)
    {
        $this->ads_id = $value;
    }

    public function showPaymentForm($id)
    {   
        $ad = Ad::findOrFail($id);
        //return view('ads.payment', compact('ad'));
        return view('payment.index', compact('ad'));
    }
    
    /**
     * Initialize a new paystack payment
     *
     * @return void
     */
    public function processPayment($id)
    {
        // Generate a unique payment reference
        $reference = Paystack::generateReference();
        //dd($reference);
        
        //$this->setId($id);

        // prepare payment details from form request
        $paymentDetails = [
            'email' => request('email'),
            'amount' => request('amount'),
            'reference' => $reference,
            'callback_url' =>  route('callback',['id'=> $id])
        ];

        

        // initialize new payment and get the response from the api call.
        $response = Paystack::transaction()
            ->initialize($paymentDetails)->response();
        

        if (!$response['status']) {
            // notify that something went wrong
            
        }

        // redirect to authorization url
        return redirect($response['data']['authorization_url']);
    }


    public function callback(Request $request)
    {
        // get reference  from request
        $reference = request('reference') ?? request('trxref');

        // verify payment details
        $payment = Paystack::transaction()->verify($reference)->response('data');

        // check payment status
        if ($payment['status'] == 'success') {
            
            //find the ads id
            $adId = $request->query('id');
            
            //find the ad
            $ad = Ad::findOrFail($adId);
            
            //update the payment status
            $ad->payment_status = 'paid';

            $ad->save();

            return redirect()->route('ads');
        } else {
            return redirect()->route('ads.error');
        }
    }

}
