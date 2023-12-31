<form action="{{ route('recruiter.update',$recruiter->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="companies_id">Company</label>
    <select name="companies_id" id="companies_id">
        @foreach ($company as $companys)
            <option value="{{ $companys->id }}">{{ $companys->name }}</option>
        @endforeach
    </select>
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ $recruiter->name }}">
    <label for="role">Role</label>
    <input type="text" name="role" id="role" value="{{ $recruiter->role }}">
    <button type="submit">Submit</button>
</form>