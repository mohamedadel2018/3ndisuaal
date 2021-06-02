<?php

namespace App\Traits;
use Illuminate\Support\Facades\File;

trait MyMedia
{
    // GET ONE FIEL
    // public function media($groupName)
    // {
    //     return $this->images->where('group_name', $groupName)->count() > 0 ? asset($this->images->where('group_name', $groupName)->first()->url) : '';
    // }
    // GET MULTIABLE IMAGES
    // public function getImagesAttribute()
    // {
    //     return $this->getMedia("images");
    // }
    /*=============================================
    =            Section UPLOAD FILES            =
    =============================================*/
    //  UPLOAD ONE FILE
    // function upload($fileRequest, $groupName)
    // {
    //     $dateTime = date('Ymd_His');
    //     $fileName = $dateTime . '-' . $fileRequest->getClientOriginalName();
    //     $fileRequest->storeAs('upload', $fileName);
    //     $url = 'upload/' . $fileName;
    //    $this->images()->create([
    //         'name' => $fileName,
    //         'url' => $url,
    //         'group_name' => $groupName,
    //     ]);
    // }

    //  UPLOAD MULTIABLE FILE
    // function uploadAll($requests, $collection = 'images')
    // {
    //     foreach ($requests as $file) {
    //         $this->addMedia($file)->toMediaCollection($collection);
    //     }
    //     return true;
    // }
    //  DELETE UPLOADED FILE
    // function clear($groupName)
    // {
    //     $file = $this->images()->where('group_name', $groupName);
    //     $fileDelete = $file->count() > 0 ? File::delete($file->first()->url) : '';
    //     // dd($file->url);
    //     // File::delete($file->delete);
    //     return $this->images()->delete();
    // }


    /* ====  End of UPLOAD FILES==== */

    public function translate($db_field_name)
    {
        // DB FIELD NAME WITH OUT _EN OR AR WILL ADD IT AUTOMATICLLY
        return $this->{$db_field_name . "_" . app()->getLocale()};
    }
}
