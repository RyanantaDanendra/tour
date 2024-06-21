@extends('layouts.sidebar')

@section('title', 'galleryTable')

@section('content')
    <div class="button pt-10 ps-20">
        <a href="{{ route('addGallery') }}"><svg xmlns="http://www.w3.org/2000/svg" class="text-4xl" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg></a>
    </div>
    <div class="container p-8 flex justify-center ">
        <table>
            <tr>
                <th class="border-b-2 border-b-black pe-4">Id</th>
                <th class="border-b-2 border-b-black">Images</th>
                <th class="border-b-2 border-b-black">Action</th>
            </tr>
            @foreach ($galleries as $gallery)
            <tr>
                <td>{{ $gallery['id'] }}</td>
                <td>{{ $gallery['image'] }}</td>
                <td>                            
                    <form action="{{ route('deleteGallery', $gallery) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" title="Delete Gallery" onclick="return confirm('Are you sure to delete this package>')"><svg class="ms-3" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection