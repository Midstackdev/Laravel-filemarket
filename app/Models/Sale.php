<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
    	'identifier',
    	'buyer_email',
    	'sale_price',
    	'sale_commission',
    ];

    public function getRouteKeyName()
    {
    	return 'identifier';
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function file()
    {
    	return $this->belongsTo(File::class);
    }
}
