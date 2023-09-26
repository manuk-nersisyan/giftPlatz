<form method="post" action="{{ route('update-header', ['header' => $header]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <div class="col-3">
            <label for="lat" class="required">Text 1</label>
            <input type="text"
                   name="text_1"
                   id="text_1"
                   class="form-control @error('text_1') is-invalid @enderror"
                   value="@if($errors->any()){{ old('text_1') }}@else{{ $header->text_1 }}@endif"
                   required>
            @error('text_1')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
        <div class="col-3">
            <label for="text_2" class="required">Text 2</label>
            <input type="text"
                   name="text_2"
                   id="text_2"
                   class="form-control @error('text_2') is-invalid @enderror"
                   value="@if($errors->any()){{ old('text_2') }}@else{{ $header->text_2 }}@endif"
                   required>
            @error('text_2')
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
            <img src="{{ Storage::disk('header')->url($header->logo) }}" width="450">
        </div>
    </div>

    <div class="row">
        <div class="col-md-2 col-lg-2 col-3">
            <button type="submit" class="btn btn-primary btn-block">Save</button>
        </div>
    </div>
</form>
