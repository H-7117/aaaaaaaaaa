<form action="{{ route('recruiter.store') }}" method="POST">
    @csrf
    <label for="companies_id">Company</label>
    <select name="companies_id" id="companies_id">
        @foreach ($company as $companys)
            <option value="{{ $companys->id }}">{{ $companys->name }}</option>
        @endforeach
    </select>
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <label for="role">Role</label>
    <input type="text" name="role" id="role">
    <button type="submit">Submit</button>
</form>