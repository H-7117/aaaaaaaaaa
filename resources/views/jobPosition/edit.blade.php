<form action="{{ route('job-position.update',$jobPosition->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">name</label>
    <input type="text" name="name" value="{{ $jobPosition->name }}">
    <label for="description">description</label>
    <input type="text" name="description" value="{{ $jobPosition->description }}">
    <input type="submit">
</form>