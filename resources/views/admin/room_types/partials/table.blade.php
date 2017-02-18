<table class="table table-hover table-striped">
    <thead>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Max Guests</td>
        <td>Total Rooms</td>
        <td>Price</td>
        <td>Description</td>
    </tr>
    </thead>
    <tbody>
    @foreach ($roomTypes as $roomType)
        @include('admin.room_types.partials.row', ['roomType' => $roomType])
    @endforeach
    </tbody>
</table>

