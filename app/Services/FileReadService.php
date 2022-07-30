<?php

namespace App\Services;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FileReadService
{
    public static function read($file)
    {
        //return self::getExtension($file);
        if(self::getExtension($file)=='csv')
            return self::readCSV($file);
        else 
            return false;
    }

    public static function readCSV($file)
    {
        $data=[];

        if(($fileData=fopen(storage_path('app/').$file,'r'))!==FALSE){

            while(($current=fgetcsv($fileData,1000,','))){
                $data[]=$current;
            }
        
        }
        fclose($fileData);

        return $data;
    }

    public static function getExtension($file)
    {
        return pathinfo($file,PATHINFO_EXTENSION);
    }
}

?>