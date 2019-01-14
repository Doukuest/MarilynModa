<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function getIndex()
    {
        return view('pages.index');
    }

    public function getCatalogo()
    {
        return view('pages.catalogo');
    }
}