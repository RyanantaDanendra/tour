<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;

class profileController extends Controller
{
    public function index() {
        $user = Auth::user()->bookings()->count();
        return view('profile', [
            'user' => $user,
        ]);
    }
}
