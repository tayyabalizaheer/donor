@csrf

<div class="form-group">
    <label for="completion_date">Completion Date</label>
    <input type="date" name="completion_date" id="completion_date" class="form-control"
        value="{{ old('completion_date',$project->completion_date) }}">
    @error('completion_date')
    <span class="text-danger">{{$message}} </span>
    @enderror
</div>

<div class="form-group">
    <label for="supervisor">Supervisor *</label>
    <select class="form-control" name="supervisor" data-value="{{ old('supervisor',$project->supervisor) }}">
        <option value="">Select supervisor</option>
        @foreach ($supervisors as $supervisor)
        <option value="{{ $supervisor->id }}">{{ $supervisor->name }}</option>
        @endforeach
    </select>
    @error('supervisor')
        <span class="text-danger">{{$message}} </span>
    @enderror
</div>

<div class="form-group">
    <label for="coordinator">coordinator *</label>
    <select class="form-control" name="coordinator" data-value="{{ old('coordinator',$project->coordinator) }}">
        <option value="">Select coordinator</option>
        @foreach ($coordinators as $coordinator)
        <option value="{{ $coordinator->id }}">{{ $coordinator->name }}</option>
        @endforeach
    </select>
    @error('coordinator')
    <span class="text-danger">{{$message}} </span>
    @enderror
</div>
