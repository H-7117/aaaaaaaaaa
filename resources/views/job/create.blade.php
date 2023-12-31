<form action="{{ route('job.store') }}" method="POST">
    @csrf
    <label for="">title</label>
    <input type="text" name="title" id="">
    <label for="">description</label>
    <input type="text" name="description" id="">
    <label for="">job_state</label>
    <input type="text" name="job_state" id="">
    {{--  --}}
    <label for="">company</label>
    <select name="companies_id" id="">
        @foreach ($company as $companies)
        <option value="{{ $companies->id }}">{{ $companies->name }}</option>
        @endforeach
    </select>
    {{--  --}}
    <label for="">job_positions</label>
    <select name="job_positions_id" id="">
        @foreach ($jobPosition as $jobPositions)
        <option value="{{ $jobPositions->id }}">{{ $jobPositions->name }}</option>
        @endforeach
    </select>
    {{--  --}}
    <label for="">job_category</label>
    <select name="job_categories_id" id="">
        @foreach ($jobCategory as $jobCategories)
        <option value="{{ $jobCategories->id }}">{{ $jobCategories->name }}</option>
        @endforeach
    </select>
    <button type="submit">submit</button>
</form>
