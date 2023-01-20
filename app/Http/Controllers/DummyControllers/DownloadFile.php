<?php

namespace App\Http\Controllers\DummyControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DownloadFile extends Controller
{
    public function downloadFile(){
        $path = public_path().'/sample.txt';
        $name = 'sample.txt';
        $header = array(
            'Content-type : application/text-plain'
        );

        return response() -> download($path, $name, $header);
    }
}
