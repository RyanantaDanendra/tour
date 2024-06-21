@extends('layouts.sidebar')

@section('title', 'addImages')

@section('content')
    <div class="container w-full h-screen flex justify-center items-center">
        <div class="max-h-96 bg-white shadow-md shadow-black px-10 pt-10 pb-20">
            <form action="{{ route('addingImages', $package->slug) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <ul>
                    <li>
                        <h1 class="text-xl font-bold text-center">Add More Images</h1>
                    </li>
                    <li class="mt-20">
                        <input type="file" onchange="checkFile()" accept="image/*" multiple name="images[]" id="images" class="hover:cursor-pointer">
                        <script>
                            function checkFile() {
                                const input = document.getElementById('images');
                                const maxFiles = 5;
                                const countFiles = {{ count($package->images) }}
                                if (input.files.length > 0) {
                                    if(input.files.length + countFiles > maxFiles) {
                                        alert('You can only select 5 files');
                                        input.value = '';
                                    }
                                }
                            }
                        </script>
                    </li>
                    <li class="my-3 flex justify-center pt-5">
                        <button type="submit" class="bg-orange-500 text-white px-3 py-1 rounded-md">Add Images</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
@endsection