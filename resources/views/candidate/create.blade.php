<form action="{{ route('candidate.store') }}" method="POST">
    @csrf
    <label for="fullName">fullName</label>
    <input type="text" name="fullName" id="fullName">
    <button type="submit">Submit</button>
</form>