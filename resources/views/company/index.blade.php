<a href="{{ route('company.create') }}">create</a>
<table>
    <tr>
        <th>Name</th>
        <th>description</th>
        <th>action</th>
    </tr>
    @foreach ( $companies as $company)
    <tr>
        <td>{{ $company->name }}</td>
        <td>{{ $company->about_company }}</td>
        <td>

             <a href="{{ route('company.show', $company->id) }}">view</a>
            <a href="{{ route('company.edit', $company->id) }}">edit</a>
            <form action="{{ route('company.destroy', $company->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit"> delete</button>
            </form>

        </td>
    </tr>
    @endforeach
</table>