<form action="{{ route('jobStage.update',$jobStages->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="">company</label>
    <select name="jobs_id" id="">
        @foreach ($job as $jobs)
        <option value="{{ $jobs->id }}">{{ $jobs->title }}</option>
        @endforeach
    </select>
    <label for="">name</label>
    <input type="text" name="name" value="{{ $jobStages->name }}" id="">
    <label for="">round</label>
    <input type="text" name="round" value="{{ $jobStages->round }}" id="">
    <button type="submit">submit</button>
</form>