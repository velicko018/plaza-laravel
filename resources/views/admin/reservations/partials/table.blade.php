<table class="table table-hover table-striped">
    <thead>
    <tr>
        <td>ID</td>
        <td>Number Of Guests</td>
        <td>Arrival Date</td>
        <td>Departure Date</td>
        <td>Status</td>
    </tr>
    </thead>
    <tbody>
    @foreach ($reservations as $reservation)
        @include('admin.reservations.partials.row', ['reservation' => $reservation])
    @endforeach
    </tbody>
</table>
