<form action="{{ route('company.store') }}" method="POST">
    @csrf
    <label for="name">name</label>
    <input type="text" name="name">
    <label for="description">description</label>
    <input type="text" name="about_company">
    <input type="submit">
</form>