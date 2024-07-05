<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Packages;
use App\Models\Images;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class dashboardController extends Controller
{
    public function index() {
        $user = User::count();
        $packages = Packages::count();
        $gallery = Gallery::count();
        return view('dashboard/home', [
            'user' => $user,
            'packages' => $packages,
            'gallery' => $gallery,
        ]);
    }

    public function users() {
        $users = User::all();
        return view('dashboard/users', [
            'users' => $users,
        ]);
    }

    public function changeStatus($id) {
        $user = User::findOrFail($id);
        $status = $user->status;

        if($user->status === 'active') {
            $status =  'unactive';
        } else if ($user->status === 'unactive') {
            $status = 'active';
        }

        $user->update([
            'status' => $status,
        ]);

        return back();
    }

    public function packagesTable() {
        $packages = Packages::all();
        return view('dashboard/packages', [
            'packages' => $packages,
        ]);
    }

    public function addPackages() {
        return view('dashboard/add');
    }

    public function newPackages(Request $request) {
        $validatedData = $request->validate([
            'name' =>  'required | max:50',
            'slug' =>  'required | max:50',
            'destination' => 'required | max:80',
            'price' => 'required | max:8',
            'duration' => 'required | max:30',
            'description' => 'max:255',
            'image' => 'file | mimes:jpeg, png, jpg',
        ]);


        $image = null;
        if($request->file('image')) {
            $image = $request->file('image')->store('image', 'public');
        }

        Packages::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'destination' => $request->destination,
            'price' => $request->price,
            'duration' => $request->duration,
            'description' => $request->description,
            'image' => $image,
        ]);

        return redirect('/dashboard/packages')->with('success', 'Packages successfully added');
    }

    public function editPackages(Packages $package) {
        return view('dashboard/edit', [
            'package' => $package,
        ]);
    }

    public function updatePackages(Request $request, Packages $package) {
        $validatedData = $request->validate([
            'name' =>  'required | max:50',
            'slug' =>  'required | max:50',
            'destination' => 'required | max:80',
            'price' => 'required | max:8',
            'duration' => 'required | max:30'
        ]);

        $package->update([
            'name' => $request->name, 
            'slug' => $request->slug,
            'destination' => $request->destination,
            'price' => $request->price,
            'duration' => $request->duration,
        ]);

        return redirect('/dashboard/packages')->with('success', 'Package updated successfully');
    }

    public function deleteImage(Images $image) {
        Storage::delete($image->image);
        $image->delete();

        return back();
    }

    public function delete(Packages $package) {
        foreach($package->images as $image) {
            Storage::delete($image->image);
            Images::find($image->id)->delete();
        }
        $package->delete();

        return back();
    }

    public function addImages(Packages $package) {
        if(count($package->images) == 5){
            return redirect('/dashboard/packages')->with('success', 'Max Images is Met');
        }

        return view('dashboard/addImages', [
            'package' => $package,
        ]);
    }

    public function addingImages(Request $request, Packages $package) {


        if($request->file('images')) {
        foreach ($request->file('images') as $image) {
            $imageStore = $image->store('image', 'public');
            
            images::create([
                'image' => $imageStore,
                'id_package' => $package->id,
            ]);
        }
        }

        return redirect('/dashboard/packages')->with('success', 'Images Added Successfully');
    }
}
