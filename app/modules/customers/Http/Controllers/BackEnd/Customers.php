<?php

namespace Customers\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class Customers extends Controller
{

    public function index(){
        return view('customers::backend.index');
//        dd("hi mr foush");
    }
}
