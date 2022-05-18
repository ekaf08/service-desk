<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\Incident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class FileUploadController extends Controller
{
    // Upload Filepond
    public function store(Request $request) {
        if($request->hasFile('imageAttachment')){
            $file = $request->file('imageAttachment');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . "-" . now()->timestamp;
            $file->storeAs('image/'. $folder, $filename);
            return $folder;
        }
        return;
    }

    public function save($data){
        Attachment::create($data);
        return;
    }

    // Revert Filepond
    public function delete(Request $request){
        $id = $request->getContent();
        File::cleandirectory(storage_path('app/image/'.$id));
    }
}
