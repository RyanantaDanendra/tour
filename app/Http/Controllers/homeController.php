<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packages;
use App\Models\Images;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Models\Booking;

class homeController extends Controller
{
    public function index() {
        $packages = Packages::orderBy('created_at', 'desc')->take(3)->get();
        return view('home', [
            'packages' => $packages,
        ]);
    }

    public function detail(Packages $package) {
        return view('detail', [
            'package' => $package,
        ]);
    }

    public function booking(Packages $package) {
        return view('booking', [
            'package' => $package,
        ]);
    }

    public function getAllBooking() {
        $bookings = Booking::all();
        return response()->json(['bookings' => $bookings], 200);
    }

    public function addBooking(Request $request, Packages $package) {
        $validatedData = $request->validate([
            'name' => 'required | max:50',
            'phone' => 'required | numeric',
            'date' => 'required',
        ]);

        Booking::create([
            'name' => $request->name,
            'phone_number' => $request->phone,
            'date' => $request->date,
            'id_package' => $package->id,
            'id_user' => AUth::user()->id,
            'package_name' => $package->name,
        ]);

        return redirect('/')->with('success', 'Booked Successfully!');
    }
}
