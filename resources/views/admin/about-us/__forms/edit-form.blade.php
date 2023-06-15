<form method="post" action="{{ route('update-about-us', ['about_us' => $aboutUs]) }}"  enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <div class="col-6">
            <label for="name" class="required">Name</label>
            <input type="text"
                   name="name"
                   id="name"
                   class="form-control @error('name') is-invalid @enderror"
                   value="@if($errors->any()){{ old('name') }}@else{{ $aboutUs->name }}@endif"
                   required>
            @error('name')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-6">
            <label for="description"  class="required">Description</label>
            <textarea name="description"
                    id="description"
                    class="form-control @error('description') is-invalid @enderror"
                    rows="5"
                    required>@if($errors->any()){{ old('description') }}@else{{ $aboutUs->description }}@endif</textarea>
            @error('description')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-6">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
            @error('image')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-6">
            <img src="{{ Storage::disk('aboutUs')->url($aboutUs->image) }}" width="450">
        </div>
    </div>

    <div class="row">
        <div class="col-2">
            <button type="submit" class="btn btn-primary btn-block">Save</button>
        </div>
    </div>
</form>
