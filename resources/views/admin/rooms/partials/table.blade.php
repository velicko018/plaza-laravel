<table class="table table-hover table-striped">
    <thead>
    <tr>
        <td>ID</td>
        <td>Number</td>
        <td>Floor</td>
    </tr>
    </thead>
    <tbody>
    @foreach ($rooms as $room)
        @include('admin.rooms.partials.row', ['room' => $room])
    @endforeach
    </tbody>
</table>