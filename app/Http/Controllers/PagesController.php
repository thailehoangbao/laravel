<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages/index');
    }

    public function about() {
        $name = 'Mehdi';
        $names = array('Mehdi', 'Ali', 'Hassan', 'Hossein' , 'Mohammad');
        return view('pages/about',[
            'name' => $name,
            'names' => $names
        ]);
    }

    public function porfolio() {
        return view('pages/porfolio');
    }
}
