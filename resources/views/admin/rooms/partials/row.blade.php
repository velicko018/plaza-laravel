<tr id="record{{ $room->id }}">
    <td>{{ $room->id }}</td>
    <td>{{ $room->number }}</td>
    <td>{{ $room->floor }}</td>
    <td>
        <div class="btn-group">
            <button type="button" class="btn btn-dark-main btn-sm block dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-cogs"></i> Actions <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right">
                <li>
                    <a href="{!! route('admin.rooms.edit', [$room->id]) !!}"><i class="fa fa-fw fa-pencil"></i>
                        Edit
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#" data-href="{!! route('admin.rooms.destroy', [$room->id]) !!}"
                       data-method="delete" data-confirm="true" data-name="{!! $room->id !!} room"
                       data-parent="#record{!! $room->id !!}">
                        <i class="glyphicon fa-fw glyphicon-remove-circle"></i>
                        Delete
                    </a>
                </li>
            </ul>
        </div>
    </td>
</tr>