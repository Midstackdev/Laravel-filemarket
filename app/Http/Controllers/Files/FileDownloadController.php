<?php

namespace App\Http\Controllers\Files;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FileDownloadController extends Controller
{
	// zipper constuctor 

    public function show(File $file, Sale $sale)
    {
    	if (!$file->visible()) {
    		return abort(403);
    	}

    	if (!$file->matchesSale($sale)) {
    		return abort(403);
    	}

    	// dd($this->generateTemporaryPath($file));
    } 

    protected function createZipForFilePath(File $file, $path)
    {
    	// make zip file with package
    }

    protected function generateTemporaryPath(File $file)
    {
    	return public_path('tmp/' . Str::slug($file->title) . '.zip');
    }
}
