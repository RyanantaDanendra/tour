@extends('layouts.sidebar');

@section('title', 'editPackages')

@section('content')
<div class="container w-full h-screen py-20">
    <div class="flex justify-center items-center">
        <form action="{{ route('updatePackages', $package->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <ul class="bg-white shadow-black shadow-lg px-10 py-10 max-h-96 overflow-y-scroll">
                <li class="py-2">
                    <label for="name" class="block text-center">Package Name</label>
                    <input type="text" name="name" id="name" class="border-b-2 border-b-gray-400" value="{{ old('name', $package->name) }}" style="width: 300px;">
                </li>
                    <label for="slug" class="block text-center">Slug</label>
                    <input type="text" name="slug" id="slug" value="{{ old('slug') }}" class="border-b-2 border-b-gray-400" value="{{ old('name', $package->name) }}" style="width: 300px;">
                </li>
                <li class="py-2">
                    <label for="destination" class="block text-center">Destination</label>
                    <input type="text" name="destination" id="destination" value="{{ old('destination', $package->destination) }}" class="border-b-2 border-b-gray-400 w-full">
                </li>
                <li class="py-2">
                    <label for="price" class="block text-center">price</label>
                    <input type="numeric" name="price" id="price" value="{{ old('price', $package->price) }}" class="border-b-2 border-b-gray-400 w-full">
                </li>
                <li class="py-2">
                    <label for="duration" class="block text-center">Duration</label>
                    <input type="text" name="duration" id="duration" value="{{ old('duration', $package->duration) }}" class="border-b-2 border-b-gray-400 w-full">
                </li>
                <li class="py-2">
                    <label for="description" class="block text-center">Description</label>
                    <input type="text" name="description" id="description" value="{{ old('description', $package->description) }}" class="border-b-2 border-b-gray-400 w-full">
                </li>
                <li class="py-2">
                    <input type="file" name="image" id="image" class="border-2 border-gray-400 w-full">
                    <p class="text-xs text-black font-bold">*Note: If you dont wan't to update the image, don't upload anything here*</p>
                </li>
                <li class="py-3 flex justify-center">
                    <button type="submit" onclick="return confirm('Are you sure to edit this package?')" class="bg-orange-500 py-2 px-20 rounded-full text-white shadow-inner shadow-black">Update</button>
                </li>
            </ul>
        </form>
    </div>
</div>
@endsection