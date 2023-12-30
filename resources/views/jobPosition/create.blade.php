<form action="{{ route('job-position.store') }}" method="POST">
    @csrf
    <label for="name">name</label>
    <input type="text" name="name">
    <label for="description">description</label>
    <input type="text" name="description">
    <input type="submit">
</form>