<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function store(Request $request) {
        if($request->hasFile('imageAttachment')){
            $file = $request->file('imageAttachment');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . "-" . now()->timestamp;
            $file->storeAs('image/tmp/'. $folder, $filename);

            return $folder;
        }
        return '';
    }
}
