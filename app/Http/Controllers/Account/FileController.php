<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\File\StoreFileRequest;
use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function create(File $file)
    {
    	if(!$file->exists) {
    		$file = $this->createAndReturnSkeletonFile();

    		return redirect()->route('account.files.create', $file);
    	}

    	$this->authorize('touch', $file);

    	return view('account.files.create', compact('file'));
    }

    public function store(File $file, StoreFileRequest $request)
    {
    	$this->authorize('touch', $file);

    	$file->fill($request->only(['title', 'overview', 'overview_short', 'price']));
    	$file->finished = 1;
    	$file->save();


    	return redirect()->route('account');
    }

    protected function createAndReturnSkeletonFile()
    {
    	return auth()->user()->files()->create([
    		'title' => 'Untitled',
    		'overview' => 'None',
    		'overview_short' => 'None',
    		'price' => 0,
    		'finished' => 0,
    	]);
    }
}
