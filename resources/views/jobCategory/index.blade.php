<a href="{{ route('job-category.create') }}">create</a>
<table>
    <tr>
        <th>Name</th>
        <th>description</th>
        <th>action</th>
    </tr>
    @foreach ( $job_category as $job_categories)
    <tr>
        <td>{{ $job_categories->name }}</td>
        <td>{{ $job_categories->description }}</td>
        <td>

            <a href="{{ route('job-category.show', $job_categories->id) }}">view</a>
            <a href="{{ route('job-category.edit', $job_categories->id) }}">edit</a>
            <form action="{{ route('job-category.destroy', $job_categories->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit"> delete</button>
            </form>

        </td>
    </tr>
    @endforeach
</table>