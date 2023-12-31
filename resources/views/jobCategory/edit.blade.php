<form action="{{ route('job-category.update',$jobCategory->id) }}" method="POST">
    @method('PUT')
    @csrf
    <label for="name">name</label>
    <input type="text" name="name" value="{{ $jobCategory->name }}">
    <label for="description">description</label>
    <input type="text" name="description" value="{{ $jobCategory->description }}">
    <input type="submit">
</form>