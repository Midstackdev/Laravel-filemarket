<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Controllers\Controller;
use App\Http\Requests\Checkout\FreeCheckoutRequest;
use App\Jobs\Checkout\CreateSale;
use App\Models\File;
use Illuminate\Http\Request;
use Stripe\Charge;

class CheckoutController extends Controller
{
    public function free(FreeCheckoutRequest $request, File $file)
    {
    	if (!$file->isFree()) {
    		return back();
    	}

    	dispatch(new CreateSale($file, $request->email));

    	return back()->withSuccess('We\'ve emailed your download link to you.');
    }

    public function payment(Request $request, File $file)
    {
    	try {
    		$charge = Charge::create([
    			'amount' => $file->price * 100,
    			'currency' => 'usd',
    			'source' => $request->stripeToken,
    			'application_fee' => $file->calculateCommission() * 100,
    		], [
    			'stripe_account' => $file->user->stripe_id
    		]);

    	} catch (Exception $e) {
    		return back()->withError('Something went wrong while processing your payment.');
    	}

    	dispatch(new CreateSale($file, $request->stripeEmail));

    	return back()->withSuccess('Paymnet Completed. We\'ve emailed your download link to you.');
    }
}
