<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class galleryController extends Controller
{
    public function index() {
        $gallery = Gallery::all();
        return view('/dashboard/gallery', [
            'galleries' => $gallery,
        ]);
    }

    public function addGallery() {
        return view('/dashboard/addGallery');
    }

    public function addImage(Request $request) {
        if($request->file('images')) {
            foreach ($request->file('images') as $image) {
                $imageStore = $image->store('image', 'public');

                Gallery::create([
                    'image' => $imageStore,
                ]);
            }
        }

        return redirect('/dashboard/gallery')->with('success', 'Images Added Successfully');
    }

    public function deleteGallery(Gallery $gallery) {
        Storage::delete($gallery->image);
        $gallery->delete();

        return redirect('/dashboard/gallery');
    }
}
