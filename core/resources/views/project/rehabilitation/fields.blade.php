@csrf
<div class="form-group">
    <label for="date">Date</label>
    <input type="date" name="date" id="date" class="form-control"
        value="{{ old('date',$rehabilitation->date) }}">
    @error('date')
    <span class="text-danger">{{$message}} </span>
    @enderror
</div>

<div class="form-group">
    <label for="detail">Detail</label>
    <textarea name="detail" id="detail" class="form-control" rows="15">{{ old('detail',$rehabilitation->detail) }}</textarea>
    @error('detail')
    <span class="text-danger">{{$message}} </span>
    @enderror
</div>
