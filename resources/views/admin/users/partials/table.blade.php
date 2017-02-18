<table class="table table-hover table-striped">
    <thead>
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>E-Mail</td>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        @include('admin.users.partials.row', ['user' => $user])
    @endforeach
    </tbody>
</table>