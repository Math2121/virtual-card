<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        $params = $request->session()->get('employee');
        $this->verifyIfParamsAreEmpty($params[0]);
        
        $params[0]['name'] = $request->name;
        return view('employee',['params'=>  $params[0]]);

    }

    public function verifyIfParamsAreEmpty(array $params)
    {
        if (empty($params)) {
            return abort(404);
        }
    }
}