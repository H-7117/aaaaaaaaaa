<a href="{{ route('job.create') }}">create</a>
<table border="1">
    <tr>
        <th>Name</th>
        <th>description</th>
        <th>job_state</th>
        <th>companies_id</th>
        <th>job_positions_id</th>
        <th>job_categories_id</th>
        <th>action</th>
    </tr>
    @foreach ( $jobs as $job )
    <tr>
        <td>{{ $job->title }}</td>
        <td>{{ $job->description }}</td>
        <td>{{ $job->job_state }}</td>
        <td>{{ $job->company->name }}</td>
        <td>{{ $job->company_positon->name }}</td>
        <td>{{ $job->company_category->name }}</td>
        <td>

             <a href="{{ route('job.show', $job->id) }}">view</a>
            <a href="{{ route('job.edit', $job->id) }}">edit</a>
            <form action="{{ route('job.destroy', $job->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit"> delete</button>
            </form>

        </td>
    </tr>
    @endforeach
</table>