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
    <div class="form-text">You can use letters, numbers &amp; periods</div>
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
    <label class="form-label" for="business_name">business name</label>
    <input type="text" id="business_name" class="form-control" name="business_name" value="{{ old('business_name',$user->business_name) }}">
    @error('business_name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label" for="city">City</label>
    <select class="form-control" name="city" data-value="{{ old('city',$user->city) }}">
        <option value="">Select City</option>
        @foreach ($cities as $city)
            <option value="{{ $city->id }}">{{ $city->name }}</option>
        @endforeach
    </select>
    @error('city')
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
        value="{{ old('password',$user->password) }}">
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
        @foreach ($user->getRoleNames() as $role)
            {{$role}} {{$loop->last?'':', '}}
        @endforeach
    </strong>
</div>
<button type="submit" class="btn btn-primary">Send</button>
