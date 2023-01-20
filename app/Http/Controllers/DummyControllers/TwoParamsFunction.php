<?php

namespace App\Http\Controllers\DummyControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TwoParamsFunction extends Controller
{
    public function GetParams(Request $request, $id, $group){
        // declare on parameter or declare like on below
        // $id = $request -> id;
        // $group = $request -> group;
        return $id.'-'.$group;
    }
}
