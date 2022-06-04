@csrf
<div class="form-group">
    <label for="date">Date</label>
    <input type="date" name="date" id="date" class="form-control"
        value="{{ old('date',$complaint->date) }}">
    @error('date')
    <span class="text-danger">{{$message}} </span>
    @enderror
</div>
<div class="form-group">
    <label for="status">Status</label>
    <select class="form-control" name="status" data-value="{{ old('status',$complaint->status) }}">
        <option value="new">New</option>
        <option value="processing">Processing</option>
        <option value="resolved">Resolved</option>
    </select>
    @error('status')
    <span class="text-danger">{{$message}} </span>
    @enderror
</div>
<div class="form-group">
    <label for="detail">Detail</label>
    <textarea name="detail" id="detail" class="form-control" rows="15">{{ old('detail',$complaint->detail) }}</textarea>
    @error('detail')
    <span class="text-danger">{{$message}} </span>
    @enderror
</div>

