@extends('layouts.sidebar')

@section('title', 'home')

@section('content')
@if (session()->has('success'))
<script>
    alert( '{{ session()->get('success') }}' );
</script>
@endif
    <div class="container w-full h-screen px-5 py-5">
        <div class="boxes flex">
            <div class="box w-72 h-40 rounded-lg border-r-8 border-r-orange-500">
                <div class="in h-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-3xl mx-3" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com --><path d="M224 256A128 128 0 1 1 224 0a128 128 0 1 1 0 256zM209.1 359.2l-18.6-31c-6.4-10.7 1.3-24.2 13.7-24.2H224h19.7c12.4 0 20.1 13.6 13.7 24.2l-18.6 31 33.4 123.9 36-146.9c2-8.1 9.8-13.4 17.9-11.3c70.1 17.6 121.9 81 121.9 156.4c0 17-13.8 30.7-30.7 30.7H285.5c-2.1 0-4-.4-5.8-1.1l.3 1.1H168l.3-1.1c-1.8 .7-3.8 1.1-5.8 1.1H30.7C13.8 512 0 498.2 0 481.3c0-75.5 51.9-138.9 121.9-156.4c8.1-2 15.9 3.3 17.9 11.3l36 146.9 33.4-123.9z"/></svg>
                    <h1 class="text-3xl font-bold">{{ $user }}</h1>
                </div>
            </div>
            <div class="box w-72 h-40 rounded-lg border-r-8 border-r-sky-600 mx-5">
                <div class="in h-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-3 text-3xl" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com --><path d="M144 56c0-4.4 3.6-8 8-8h80c4.4 0 8 3.6 8 8v72H144V56zm176 72H288V56c0-30.9-25.1-56-56-56H152C121.1 0 96 25.1 96 56v72H64c-35.3 0-64 28.7-64 64V416c0 35.3 28.7 64 64 64c0 17.7 14.3 32 32 32s32-14.3 32-32H256c0 17.7 14.3 32 32 32s32-14.3 32-32c35.3 0 64-28.7 64-64V192c0-35.3-28.7-64-64-64zM112 224H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 128H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
                    <h1 class="text-3xl font-bold">{{ $packages }}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection