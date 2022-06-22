<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function controllerMethod(){
        return view('welcome');
        // return response()->json([
        //     'msg' => 'we should retrun json'
        // ]);
    }
}
