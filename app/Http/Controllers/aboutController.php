<?php

namespace App\Http\Controllers;
use App\Models\Gallery;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function index() {
        $galleries = Gallery::all();

        return view('/about', [
            'galleries' => $galleries,
        ]);
    }
}
