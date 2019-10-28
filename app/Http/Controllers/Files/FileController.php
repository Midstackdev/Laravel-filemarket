<?php

namespace App\Http\Controllers\Files;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function show(File $file)
    {
    	return view('files.show', [
    		'file' => $file
    	]);
    }
}
