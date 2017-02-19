<tr id="record{{ $user->id }}">
    <td>{{ $user->id }}</td>
    <td>{{ $user->first_name }}</td>
    <td>{{ $user->last_name }}</td>
    <td>{{ $user->email }}</td>
    <td>
        <div class="btn-group">
            <button type="button" class="btn btn-dark-main btn-sm block dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-cogs"></i> Actions <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right">
                <li>
                    <a href="{!! route('admin.users.edit', [$user->id]) !!}"><i class="fa fa-fw fa-pencil"></i>
                        Edit
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#" data-href="{!! route('admin.users.destroy', [$user->id]) !!}"
                       data-method="delete" data-confirm="true" data-name="{!! $user->id !!} user"
                       data-parent="#record{!! $user->id !!}">
                        <i class="glyphicon fa-fw glyphicon-remove-circle"></i>
                        Delete
                    </a>
                </li>
            </ul>
        </div>
    </td>
</tr>