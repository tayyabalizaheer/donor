<form action="{{ route('seller.register') }}" method="POST">
    @csrf

    <div class="d-flex">
        <div class="col-lg-6">
            <label class="form-label" for="fullname">Name</label>
            <input type="text" class="form-control" id="fullname" placeholder="John Doe" name="name"
                value="{{ old('name') }}">
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-lg-6">
            <label class="form-label" for="mobile">mobile No</label>
            <input type="text" id="mobile" class="form-control" name="mobile" value="{{ old('mobile') }}">
            @error('mobile')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

    </div>
    <div class="d-flex">
        <div class="col-12">
            <label class="form-label" for="email">Email Address</label>
            <div class="input-group input-group-merge">
                <input type="text" id="email" class="form-control" name="email" value="{{ old('email') }}">
            </div>
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

    </div>

    <div class="d-flex">
        <div class="col-12">
            <label class="form-label" for="business_name">business name</label>
            <input type="text" id="business_name" class="form-control" name="business_name"
                value="{{ old('business_name') }}">
            @error('business_name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

    </div>

    <div class="d-flex">
        <div class="col-lg-6">
            <label class="form-label" for="city">City</label>
            <select class="form-control" name="city" data-value="{{ old('city') }}">
                <option value="">Select City</option>
                @foreach ($cities as $city)
                <option {{ ($page == $city->slug )?'selected':'' }} value="{{ $city->id }}">
                    {{ $city->name }}</option>
                @endforeach
            </select>
            @error('city')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-lg-6">
            <label class="form-label" for="address">address</label>
            <input type="text" id="address" class="form-control" name="address" value="{{ old('price') }}">
            @error('price')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="d-flex">
        <div class="col-12">
            <label class="form-label" for="message">message</label>
            <textarea id="message" class="form-control" name="message">{{ old('price') }}</textarea>
            @error('message')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

    </div>

    <div class="d-flex mt-3 justify-content-center">
        <div class="col-lg-4 col-8">
            <button type="submit" class="btn btn-block btn-black">Submit</button>
        </div>

    </div>


</form>
