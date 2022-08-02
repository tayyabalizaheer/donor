@csrf

<div class="form-group">
    <label for="supervisor">Current step *</label>
    <select class="form-control" name="step" data-value="{{ old('step',$project->step) }}">
        <option value="">Select step</option>
        <option value="Site Assessment">Site Assessment</option>
        <option value="Technical Assessment">Technical Assessment</option>
        <option value="Community Mobilization">Community Mobilization</option>
        <option value="Project Budget Head clearance & Budget Marking">Project Budget Head clearance & Budget Marking</option>
        <option value="Procurement">Procurement</option>
        <option value="Installation">Installation</option>
        <option value="others">Others</option>
    </select>
    @error('supervisor')
    <span class="text-danger">{{$message}} </span>
    @enderror
</div>

<div class="form-group">
    <label for="completion_date">Completion Date</label>
    <input type="date" name="completion_date" id="completion_date" class="form-control"
        value="{{ old('completion_date',$project->completion_date) }}">
    @error('completion_date')
    <span class="text-danger">{{$message}} </span>
    @enderror
</div>

<div class="form-group">
    <label for="donor">Donor *</label>
    <select class="form-control" name="donor_id" data-value="{{ old('donor',$project->donor) }}">
        <option value="">Select donor</option>
        @foreach ($donors as $donor)
        <option value="{{ $donor->id }}">{{ $donor->name }}</option>
        @endforeach
    </select>
    @error('donor_id')
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
