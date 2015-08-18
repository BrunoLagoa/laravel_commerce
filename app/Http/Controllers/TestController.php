<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class TestController extends Controller
{
    public function getExemploSuper()
    {
        return "Oi";
    }

    public function postExemplo()
    {
        return "OI";
    }
}
