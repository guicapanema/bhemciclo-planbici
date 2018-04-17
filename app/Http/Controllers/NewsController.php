<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
	public function list()
    {
        return readfile('http://bhemciclo.org/category/planbici/feed/');
    }
}
