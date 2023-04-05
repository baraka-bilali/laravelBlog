<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaysController extends Controller
{
    public function index(){
        $array = [
            'RDC',
            'Tanzanie',
            'France',
            'Namibie',
            'Zimbabwe'
        ];

        $title = "Les Pays";

        return view('Pays', compact('array'))->with('title');
    }

    public function show($id){



        $array = [
            'RDC',
            'Tanzanie',
            'France',
            'Namibie',
            'Zimbabwe'
        ];

        $title = $array[$id-1];
        return view('single', compact('title'));
    }
}
