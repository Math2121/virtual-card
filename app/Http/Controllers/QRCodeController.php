<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QRCodeController extends Controller
{
    //
    public function index(Request $request){

        $request->session()->put('employee', [[
            'linkedin' => $request->params['linkedin'],
            'github' => $request->params['github'],
        ]]);
        return view('qrcode-page', ["params" => $request->params['name']]);
    }
}