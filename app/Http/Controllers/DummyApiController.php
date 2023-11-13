<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyApiController extends Controller
{
    //
    public function getData() {
        return ['name'=>'Phone Min Myat', 'Age'=>'12', 'email'=>'pmm@gmail.com'];
    }
}
