<form action="{{ route('buyer.register') }}" method="POST">
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
                <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
            @error('city')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-lg-6">
            <label class="form-label" for="address">price</label>
            <input type="text" id="price" class="form-control" name="price" value="{{ old('price') }}">
            @error('price')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="d-flex">
        <div class="col-12">
            <label class="form-label" for="interests">What are you looking for?</label>
            <select class="form-control" name="interests" data-value="{{ old('interests') }}">
                <option value="">Select interests</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('interests')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

    </div>

    <div class="d-flex mt-5 justify-content-center">
        <div class="col-lg-4 col-8">
            <button type="submit" class="btn btn-block btn-black">Submit</button>
        </div>

    </div>


</form>
