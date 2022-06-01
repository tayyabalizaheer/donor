@csrf

<div class="form-group">
    <label for="installation_date">Installation Date</label>
    <input type="date" name="installation_date" id="installation_date" class="form-control"
        value="{{ old('installation_date',$project->installation_date) }}">
    @error('installation_date')
    <span class="text-danger">{{$message}} </span>
    @enderror
</div>

<div class="form-group">
    <label for="beneficiary">Beneficiary</label>
    <input type="text" name="beneficiary" id="beneficiary" class="form-control" value="{{ old('beneficiary',$project->beneficiary) }}">
    @error('beneficiary')
    <span class="text-danger">{{$message}} </span>
    @enderror
</div>
