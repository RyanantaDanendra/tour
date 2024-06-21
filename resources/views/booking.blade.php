@extends('layouts.header')

@section('title', 'booking')
    
@section('content')
<script>
    $(function() {
        $.ajax({
            url: '/booking/getAll',
            type: 'GET',
            success: function(res) {
                const bookedDates = res.bookings.map((book) => new Date(book.date));
                // Initialize the datepicker
                $("#datepicker").datepicker({
                    beforeShowDay: function(date) {
                        console.log(bookedDates[1].toDateString())
                        const dayOfWeek = date.getDay();
                        // Check if the date is not in the bookedDates array
                        const isSelectable = (dayOfWeek === 0 || dayOfWeek === 1) && !bookedDates.some(d => d.toDateString() == date.toDateString());
                        // Return an array indicating whether the date is selectable and any additional CSS classes
                        return [isSelectable, ''];
                    },
                    dateFormat: 'yy-mm-dd',
                    showOtherMonths: true,
                    selectOtherMonths: true
                });
            },
            error: function(err) {
                console.error(err);
                alert('error broku')
            }
        });
    });
</script>

    <div class="contaiener min-h-screen pt-28">
        <form action="{{ route('addBooking', $package->slug) }}" method="POST" class="flex justify-center">
            @csrf
            <ul class=" flex flex-col justify-center items-center px-16 pt-10 pb-14 shadow-md shadow-black">
                <h1 class="text-xl font-bold pb-10">Please FIll the Form Below</h1>
                <li class="">
                    <label for="name" class="block text-center">Name</label>
                    <input type="text" name="name" id="name" class="border-b-2 border-b-gray-500">
                </li>
                <li class="mt-6">
                    <label for="phone" class="block text-center">Phone Number</label>
                    <input type="text" name="phone" id="phone" class="border-b-2 border-b-gray-500">
                </li>
                <li class="mt-6">
                    <label for="date" class="block text-center">Date</label>
                    <input type="text" id="datepicker" autocomplete="off" name="date" class="border-b-2 border-b-gray-500">
                </li>
                <li class="mt-8">
                    <button type="submit" class="px-5 py-2 bg-orange-500 text-white" style="border-radius: 75px 0 75px 0">Book!</button>
                </li>
            </ul>
        </form>
    </div>
@endsection