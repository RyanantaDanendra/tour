@extends('layouts.sidebar')

@section('title', 'Packages')
    
@section('content')
@if (session()->has('success'))
<script>
    alert( '{{ session()->get('success') }}' );
</script>
@endif
    <div class="container h-screen w-full">
        <div class="button pt-10 ps-20">
            <a href="{{ route('addPackages') }}"><svg xmlns="http://www.w3.org/2000/svg" class="text-4xl" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg></a>
        </div>
        <div class=" flex justify-center items-start">
            <table >
                <tr class="border-b-black border-b-2">
                    <th class="px-4 text-xl">Id</th>
                    <th class="px-4 text-xl">Name</th>
                    <th class="px-4 text-xl">Desttination</th>
                    <th class="px-4 text-xl">Price</th>
                    <th class="px-4 text-xl">Duration</th>
                    <th class="px-4 text-xl">Action</th>
                </tr>
                @foreach ($packages as $package)
                    <tr class="text-center">
                        <td>{{ $package['id'] }}</td>
                        <td>{{$package['name']}}</td>
                        <td>{{$package['destination']}}</td>
                        <td>{{$package['price']}}</td>
                        <td>{{$package['duration']}}</td>
                        <td class="flex justify-center items-center gap-2">
                            <a href="{{ route('editPackages', $package->slug) }}"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></a>
                            <form action="{{ route('delete', $package->slug) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" title="Delete Packages" onclick="return confirm('Are you sure to delete this package>')"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>
                            </form>
                            <a href="{{ route('addImages', $package->slug) }}" title="Add-More-Images"><svg xmlns="http://www.w3.org/2000/svg" title="Add-More-Images" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection