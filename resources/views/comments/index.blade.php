<a href="{{ route('comments.create') }}">create</a>
<table border="1">
    <tr>
        <th>jobs_id</th>
        <th>Name</th>
        <th>round</th>
        <th>action</th>
    </tr>
    @foreach ( $comments as $comment)
    <tr>
        {{-- <td>{{ $recruiters->recruiter_companies->name }}</td> --}}
        <td>{{ $comment->recruiters_id}}</td>
        <td>{{ $comment->candittts_id}}</td>
        <td>{{ $comment->role }}</td>
        <td>

             {{-- <a href="{{ route('recruiter.show', $recruiters->id) }}">view</a>

             <a href="{{ route('recruiter.edit', $recruiters->id) }}">edit</a>
            <form action="{{ route('recruiter.destroy', $recruiters->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit"> delete</button>
            </form> --}}

        </td>
    </tr>
    @endforeach
</table>