@csrf
<div class="form-group">
    <label for="name">Project Name *</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name',$project->name) }}">
    @error('name')
        <span class="text-danger">{{$message}} </span>
    @enderror
</div>
<div class="form-group">
    <label for="assessment">Need Assessment *</label>
    <input type="text" name="assessment" id="assessment" class="form-control" value="{{ old('name',$project->assessment) }}">
    @error('assessment')
        <span class="text-danger">{{$message}} </span>
    @enderror
</div>
<div class="form-group">
    <label for="requester">Requester *</label>
    <select class="form-control" name="requester" data-value="{{ old('requester',$project->requester) }}">
        <option value="">Select requester</option>
        @foreach ($requesters as $requester)
        <option value="{{ $requester->id }}">{{ $requester->name }}</option>
        @endforeach
    </select>
    @error('requester')
        <span class="text-danger">{{$message}} </span>
    @enderror
</div>
<div class="form-group">
    <label for="district">District</label>
    <input type="text" name="district" id="district" class="form-control" value="{{ old('name',$project->district) }}">
    @error('district')
        <span class="text-danger">{{$message}} </span>
    @enderror
</div>

<div class="form-group">
    <label for="tehsil">Tehsil</label>
    <input type="text" name="tehsil" id="tehsil" class="form-control" value="{{ old('name',$project->tehsil) }}">
    @error('tehsil')
        <span class="text-danger">{{$message}} </span>
    @enderror
</div>

<div class="form-group">
    <label for="area">Area</label>
    <input type="text" name="area" id="area" class="form-control" value="{{ old('name',$project->name) }}">
    @error('area')
        <span class="text-danger">{{$message}} </span>
    @enderror
</div>

<div class="form-group">
    <label for="quality_report">Quality Report *</label>
    <input type="text" name="quality_report" id="quality_report" class="form-control" value="{{ old('name',$project->quality_report) }}">
    @error('quality_report')
        <span class="text-danger">{{$message}} </span>
    @enderror
</div>


<div class="form-group">
    <label for="proposal_date">Proposal Date</label>
    <input type="date" name="proposal_date" id="proposal_date" class="form-control" value="{{ old('name',$project->proposal_date) }}">
    @error('proposal_date')
        <span class="text-danger">{{$message}} </span>
    @enderror
</div>

<div class="form-group">
    <label for="budget_date">Budget Date</label>
    <input type="date" name="budget_date" id="budget_date" class="form-control" value="{{ old('name',$project->budget_date) }}">
    @error('budget_date')
        <span class="text-danger">{{$message}} </span>
    @enderror
</div>

<div class="form-group">
    <label for="approval_date">Approval Date</label>
    <input type="date" name="approval_date" id="approval_date" class="form-control" value="{{ old('name',$project->approval_date) }}">
    @error('approval_date')
        <span class="text-danger">{{$message}} </span>
    @enderror
</div>

<div class="form-group mt-3">
   <button type="submit" class="btn btn-primary">Submit</button>
</div>
