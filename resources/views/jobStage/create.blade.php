<form action="{{ route('jobStage.store') }}" method="POST">
    @csrf
    <label for="">company</label>
    <select name="jobs_id" id="">
        @foreach ($job as $jobs)
        <option value="{{ $jobs->id }}">{{ $jobs->title }}</option>
        @endforeach
    </select>
    <label for="">name</label>
    <input type="text" name="name" id="">
    <label for="">round</label>
    <input type="text" name="round" id="">
    <button type="submit">submit</button>
</form>