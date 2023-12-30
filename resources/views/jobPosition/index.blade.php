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

            <a href="">view</a>
            <a href="">delete</a>
            <a href="">edit</a>

        </td>
    </tr>
    @endforeach
</table>