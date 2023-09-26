<form method="post" action="{{ route('update-footer', ['footer' => $footer]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <div class="col-6">
            <label for="lat" class="required">Text</label>
            <input type="text"
                   name="text"
                   id="text"
                   class="form-control @error('text') is-invalid @enderror"
                   value="@if($errors->any()){{ old('text') }}@else{{ $footer->text }}@endif"
                   required>
            @error('text')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <label for="logo">Logo</label>
            <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror">
            @error('logo')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-6">
            <img src="{{ Storage::disk('footer')->url($footer->logo) }}" width="450">
        </div>
    </div>

    <div class="row">
        <div class="col-md-2 col-lg-2 col-3">
            <button type="submit" class="btn btn-primary btn-block">Save</button>
        </div>
    </div>
</form>
