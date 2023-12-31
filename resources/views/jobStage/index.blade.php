<a href="{{ route('jobStage.create') }}">create</a>
<table border="1">
    <tr>
        <th>jobs_id</th>
        <th>Name</th>
        <th>round</th>
        <th>action</th>
    </tr>
    @foreach ( $jobStages as $jobStage)
    <tr>
        <td>{{ $jobStage->jobs_id }}</td>
        <td>{{ $jobStage->name }}</td>
        <td>{{ $jobStage->round }}</td>
        <td>

             <a href="{{ route('jobStage.show', $jobStage->id) }}">view</a>

            <a href="{{ route('jobStage.edit', $jobStage->id) }}">edit</a>
            <form action="{{ route('jobStage.destroy', $jobStage->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit"> delete</button>
            </form>

        </td>
    </tr>
    @endforeach
</table>