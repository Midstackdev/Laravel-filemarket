<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Controllers\Controller;
use App\Http\Requests\Checkout\FreeCheckoutRequest;
use App\Jobs\Checkout\CreateSale;
use App\Models\File;
use Illuminate\Http\Request;

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
}
