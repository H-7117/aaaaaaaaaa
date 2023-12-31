<form action="{{ route('company.update',$companies->id) }}" method="POST">
    @method('PUT')
    @csrf
    <label for="name">name</label>
    <input type="text" name="name" value="{{ $companies->name }}">
    <label for="description">description</label>
    <input type="text" name="about_company" value="{{ $companies->about_company }}">
    <input type="submit">
</form>