@extends('layouts.sidebar')

@section('title', 'addGallery')
    
@section('content')
    <div class="container w-full h-screen flex justify-center items-center">
        <form action="{{ route('addImage') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <label for="images">Add Image</label>
            <input type="file" accept="image/*" name="images[]" class="block" multiple>

            <button type="submit" class="bg-orange-500 px-2 py-1 text-white shadow-inner shadow-black mt-4">Add</button>
        </form>
    </div>
@endsection