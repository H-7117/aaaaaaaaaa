<a href="{{ route('job-position.create') }}">create</a>
<table>
    <tr>
        <th>Name</th>
        <th>description</th>
        <th>action</th>
    </tr>
    @foreach ( $job_positions as $job_position)
    <tr>
        <td>{{ $job_position->name }}</td>
        <td>{{ $job_position->description }}</td>
        <td>

            <a href="{{ route('job-position.show', $job_position->id) }}">view</a>
            <a href="{{ route('job-position.edit', $job_position->id) }}">edit</a>
            <form action="{{ route('job-position.destroy', $job_position->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit"> delete</button>
            </form>

        </td>
    </tr>
    @endforeach
</table>