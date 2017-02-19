<tr id="record{{ $roomType->id }}">
    <td>{{ $roomType->id }}</td>
    <td>{{ $roomType->name }}</td>
    <td>{{ $roomType->max_guests }}</td>
    <td>{{ $roomType->total_rooms }}</td>
    <td>{{ $roomType->price }}</td>
    <td>{{ $roomType->description }}</td>
    <td>
        <div class="btn-group">
            <button type="button" class="btn btn-dark-main btn-sm block dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-cogs"></i> Actions <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right">
                <li>
                    <a href="{!! route('admin.room_types.edit', [$roomType->id]) !!}"><i class="fa fa-fw fa-pencil"></i>
                        Edit
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#" data-href="{!! route('admin.room_types.destroy', [$roomType->id]) !!}"
                       data-method="delete" data-confirm="true" data-name="{!! $roomType->id !!} room type"
                       data-parent="#record{!! $roomType->id !!}">
                        <i class="glyphicon fa-fw glyphicon-remove-circle"></i>
                        Delete
                    </a>
                </li>
            </ul>
        </div>
    </td>
</tr>