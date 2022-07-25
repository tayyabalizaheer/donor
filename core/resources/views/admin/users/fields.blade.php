@csrf
<div class="mb-3">
    <label class="form-label" for="fullname">Full Name</label>
    <input type="text" class="form-control" id="fullname" placeholder="John Doe" name="name" value="{{ old('name',$user->name) }}">
    @error('name')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="mb-3">
    <label class="form-label" for="email">Email</label>
    <div class="input-group input-group-merge">
        <input type="text" id="email" class="form-control" name="email" value="{{ old('email',$user->email) }}">
    </div>
    @error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="mb-3">
    <label class="form-label" for="mobile">mobile No</label>
    <input type="text" id="mobile" class="form-control" name="mobile" value="{{ old('mobile',$user->mobile) }}">
    @error('mobile')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label" for="address">Address</label>
    <input type="text" id="address" class="form-control" name="address"
        value="{{ old('address',$user->address) }}">
        @error('address')
            <span class="text-danger">{{ $message }}</span>
        @enderror
</div>
<div class="mb-3">
    <label class="form-label" for="password">password</label>
    <input type="text" id="password" class="form-control" name="password"
        value="{{ old('password','') }}">
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
</div>
<div class="mb-3">
    <label class="form-label" for="role">role</label>
    <select class="form-control" name="role">
        <option value="">Select role</option>
        @foreach ($roles as $role)
        <option value="{{ $role->id }}">{{ $role->name }}</option>
        @endforeach
    </select>
    @error('role')
        <span class="text-danger">{{ $message }}</span>
    @enderror
    <strong>Current Role:
        @foreach ($user->roles as $role)
            {{$role->name}} <a href="{{ route('user.role.delete',[$user,$role->name]) }}"><i class="bx bx-trash me-1 text-danger"></i></a>{{$loop->last?'':', '}}
        @endforeach
    </strong>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
