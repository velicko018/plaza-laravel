<tr id="record{{ $reservation->id }}">
    <td>{{ $reservation->id }}</td>
    <td>{{ $reservation->number_of_guests }}</td>
    <td>{{ $reservation->arrival_date }}</td>
    <td>{{ $reservation->departure_date }}</td>
    <td>{{ $reservation->status ? 'Active' : 'Not Active' }}</td>
    <td>
        <div class="btn-group">
            <button type="button" class="btn btn-dark-main btn-sm block dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-cogs"></i> Actions <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right">
                <li>
                    <a href="{!! route('admin.reservations.edit', [$reservation->id]) !!}"><i class="fa fa-fw fa-pencil"></i>
                        Edit
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#" data-href="{!! route('admin.reservations.destroy', [$reservation->id]) !!}"
                       data-method="delete" data-confirm="true" data-name="{!! $reservation->id !!} reservation"
                       data-parent="#record{!! $reservation->id !!}">
                        <i class="glyphicon fa-fw glyphicon-remove-circle"></i>
                        Delete
                    </a>
                </li>
            </ul>
        </div>
    </td>
</tr>
