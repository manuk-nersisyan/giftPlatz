<form method="post" action="{{ route('update-contact', ['contact' => $contact]) }}">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <div class="col-2">
            <label for="address" class="required">Address</label>
            <input type="text"
                   name="address"
                   id="address"
                   class="form-control @error('address') is-invalid @enderror"
                   value="@if($errors->any()){{ old('address') }}@else{{ $contact->address }}@endif"
                   required>
            @error('address')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
        <div class="col-2">
            <label for="phone_number" class="required">Phone Number</label>
            <input type="text"
                   name="phone_number"
                   id="phone_number"
                   class="form-control @error('phone_number') is-invalid @enderror"
                   value="@if($errors->any()){{ old('phone_number') }}@else{{ $contact->phone_number }}@endif"
                   required>
            @error('phone_number')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
        <div class="col-2">
            <label for="email" class="required">Email</label>
            <input type="text"
                   name="email"
                   id="email"
                   class="form-control @error('email') is-invalid @enderror"
                   value="@if($errors->any()){{ old('email') }}@else{{ $contact->email }}@endif"
                   required>
            @error('email')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <div class="col-3">
            <label for="lat" class="required">Lat</label>
            <input type="text"
                   name="lat"
                   id="lat"
                   class="form-control @error('lat') is-invalid @enderror"
                   value="@if($errors->any()){{ old('lat') }}@else{{ $contact->lat }}@endif"
                   required>
            @error('lat')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
        <div class="col-3">
            <label for="long" class="required">Long</label>
            <input type="text"
                   name="long"
                   id="long"
                   class="form-control @error('long') is-invalid @enderror"
                   value="@if($errors->any()){{ old('long') }}@else{{ $contact->long }}@endif"
                   required>
            @error('long')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <div class="col-3">
            <label for="facebook_link" class="required">Fcebook Link</label>
            <input type="text"
                   name="facebook_link"
                   id="facebook_link"
                   class="form-control @error('facebook_link') is-invalid @enderror"
                   value="@if($errors->any()){{ old('facebook_link') }}@else{{ $contact->facebook_link }}@endif"
                   required>
            @error('facebook_link')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
        <div class="col-3">
            <label for="instagram_link" class="required">Instagram Link</label>
            <input type="text"
                   name="instagram_link"
                   id="instagram_link"
                   class="form-control @error('instagram_link') is-invalid @enderror"
                   value="@if($errors->any()){{ old('instagram_link') }}@else{{ $contact->instagram_link }}@endif"
                   required>
            @error('long')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-md-2 col-lg-2 col-3">
            <button type="submit" class="btn btn-primary btn-block">Save</button>
        </div>
    </div>
</form>
