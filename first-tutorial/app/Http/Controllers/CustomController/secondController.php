<?php

namespace App\Http\Controllers\CustomController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class secondController extends Controller
{
    public function test_form()
    {
        return "Form submit successfull";
    }
}
