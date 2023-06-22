<form method="post" action="{{ route('categories.update', ['category' => $category]) }}">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <div class="col-2">
            <label for="name" class="required">Name</label>
            <input type="text"
                   name="name"
                   id="name"
                   class="form-control @error('name') is-invalid @enderror"
                   value="@if($errors->any()){{ old('name') }}@else{{ $category->name }}@endif"
                   required>
            @error('name')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
        <div class="col-2">
            <label class="pt-2 mt-30" for="is_active">Is Active</label>
            <input type="checkbox"
                   name="is_active"
                   id="is_active"
                   class="@error('is_active') is-invalid @enderror"
                   @if($errors->any() && old('is_active') == 'on' || $category->is_active == true) checked @endif>
            @error('is_active')
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
        <div class="col-md-2 col-lg-2 col-3">
            <a href="{{ route('categories.index') }}" class="btn btn-primary btn-block">Cancel</a>
        </div>
    </div>
</form>
