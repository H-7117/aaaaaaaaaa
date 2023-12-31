<a href="{{ route('recruiter.create') }}">create</a>
<table border="1">
    <tr>
        <th>jobs_id</th>
        <th>Name</th>
        <th>round</th>
        <th>action</th>
    </tr>
    @foreach ( $recruiter as $recruiters)
    <tr>
        <td>{{ $recruiters->recruiter_companies->name }}</td>
        <td>{{ $recruiters->name }}</td>
        <td>{{ $recruiters->role }}</td>
        <td>

             <a href="{{ route('recruiter.show', $recruiters->id) }}">view</a>

             <a href="{{ route('recruiter.edit', $recruiters->id) }}">edit</a>
            <form action="{{ route('recruiter.destroy', $recruiters->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit"> delete</button>
            </form>

        </td>
    </tr>
    @endforeach
</table>