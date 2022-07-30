<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use App\Services\FileReadService;

class FileStoreService
{
    public static function store($path,$file)
    {
        $name=Storage::put($path,$file);
        $newName=$path.date('d_m_Y').'.'.FileReadService::getExtension($name);
        Storage::move($name,$newName);
        return $newName;
    }
}

?>