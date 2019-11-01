<?php

namespace App\Http\ViewComposers;

use App\Models\{File, Sale};
use Illuminate\View\View;

class AdminStatsComposer 
{
	public function compose(View $view)
	{

		$view->with([
			'fileCount' => File::finished()->approved()->count(),
			'saleCount' => Sale::count(),
			'thisMonthCommision' => Sale::commisionThisMonth(),
			'lifetimeCommission' => Sale::lifetimeCommission(),
		]);
	}
}