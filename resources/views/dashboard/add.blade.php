@extends('layouts.sidebar')

@section('title', 'addPackages')
    
@section('content')
    <div class="container w-full h-full py-20">
        <div class="flex justify-center items-center">
            <form action="{{ route('newPackages') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <ul class="bg-white shadow-black shadow-lg px-10 max-h-96 py-5 overflow-y-scroll">
                    <li class="py-2">
                        <label for="name" class="block text-center">Package Name</label>
                        <input type="text" name="name" id="name" class="border-b-2 border-b-gray-400" style="width: 300px;">
                    </li>
                    <li class="py-2">
                        <label for="slug" class="block text-center">Slug</label>
                        <input type="text" name="slug" id="slug" class="border-b-2 border-b-gray-400" style="width: 300px;">
                    </li>
                    <li class="py-2">
                        <label for="destination" class="block text-center">Destination</label>
                        <input type="text" name="destination" id="destination" class="border-b-2 border-b-gray-400 w-full">
                    </li>
                    <li class="py-2">
                        <label for="price" class="block text-center">price</label>
                        <input type="numeric" name="price" id="price" class="border-b-2 border-b-gray-400 w-full">
                    </li>
                    <li class="py-2">
                        <label for="duration" class="block text-center">Duration</label>
                        <input type="text" name="duration" id="duration" class="border-b-2 border-b-gray-400 w-full">
                    </li>
                    <li class="py-2">
                        <label for="description" class="block text-center">Description</label>
                        <input type="text" name="description" id="description" class="border-b-2 border-b-gray-400 w-full">
                    </li>
                    <li class="py-3 flex justify-center">
                        <button type="submit" class="bg-orange-500 py-2 px-20 rounded-full text-white shadow-inner shadow-black">Add</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
@endsection