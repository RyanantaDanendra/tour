<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packages;
use App\Models\Images;

class packagesController extends Controller
{
    public function index() {
        $packages = Packages::All();
        return view('/packages', [
            'packages' => $packages,
        ]);
    
    }

    public function packages(Request $request) {
        if(isset($_GET['search'])) {
            $search = $_GET['search'];
            if(isset($search)){
                $packages = Packages::where('name', 'like', "%".$search."%")->get();
            } else {
                $packages = Packages::all();
            }
            return view('/packages', [
                'packages' => $packages,
            ]);
        }
    }
}
