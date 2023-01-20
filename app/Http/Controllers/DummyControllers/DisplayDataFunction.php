<?php

namespace App\Http\Controllers\DummyControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DisplayDataFunction extends Controller
{
    public function DisplayData($id){
        $data = Array(
            "id" => $id,
            "name" => "Daryle",
            "age" => "22",
            "email" => "daryle@gmail.com"
        );

        return view("/DummyViews/displayData", $data);

        // alternative way to pass the data
        // return view("/DummyViews/displayData")
        //         -> with('id', $id)
        //         -> with('name', 'Daryle')
        //         -> with('age', 22)
        //         -> with('email', 'daryle@gmail.com');
    }
}
