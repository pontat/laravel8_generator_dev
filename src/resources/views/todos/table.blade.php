<div class="table-responsive">
    <table class="table" id="todos-table">
        <thead>
            <tr>
            <th style="cursor: pointer" onclick="window.location=`{{ $sort === 'titleAsc' }}`?
                    `{{ route('todos.index', ['queryText=' . $queryText, 'status=' . $status, 'sort=titleDesc']) }}` :
                    `{{ route('todos.index', ['queryText=' . $queryText, 'status=' . $status,  'sort=titleAsc']) }}`"
                    >Title
                    @if ($sort === 'titleAsc') <i class="fas fa-arrow-up"></i> @endif
                    @if ($sort === 'titleDesc') <i class="fas fa-arrow-down"></i> @endif
                </th>
                <th style="cursor: pointer" onclick="window.location=`{{ $sort === 'statusAsc' }}`?
                    `{{ route('todos.index', ['queryText=' . $queryText, 'status=' . $status, 'sort=statusDesc']) }}` :
                    `{{ route('todos.index', ['queryText=' . $queryText, 'status=' . $status, 'sort=statusAsc']) }}`"
                    >Status
                    @if ($sort === 'statusAsc') <i class="fas fa-arrow-up"></i> @endif
                    @if ($sort === 'statusDesc') <i class="fas fa-arrow-down"></i> @endif
                </th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($todos as $todo)
            <tr>
                <td>{{ $todo->title }}</td>
            <td>{{ $todo->status_name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['todos.destroy', $todo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('todos.show', [$todo->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('todos.edit', [$todo->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
