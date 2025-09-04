<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{

    public function index() // afisam lista de documente
    {
   
        $files = Storage::files('documents');


        $documents = array_map('basename', $files);

        return view('documente', compact('documents'));
    }


    public function download($filename)
    {

        $filename = basename($filename);

        $filePath = storage_path('app/documents/' . $filename);

        if (!file_exists($filePath)) {
            abort(404);
        }

        return response()->download($filePath);
    }
}
