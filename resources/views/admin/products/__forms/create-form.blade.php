<form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <div class="col-2">
            <label for="category_id" class="required">Category Id</label>
            <select id="category_id"
                    name="category_id"
                    class="form-control @error('category_id') is-invalid @enderror"
                    required>
                <option value="" selected>Choose</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        @if($errors->any() && old('category_id') == $category->id) selected @endif>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
        <div class="col-4">
            <label for="subcategory_id">Subcategory Id</label>
            <select id="subcategory_id"
                    name="subcategory_id"
                    class="form-control @error('subcategory_id') is-invalid @enderror">
                <option value="" selected>Choose</option>
                {{-- @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        @if($errors->any() && old('subcategory_id') == $category->id) selected @endif>
                        {{ $category->name }}
                    </option>
                @endforeach --}}
            </select>
            @error('subcategory_id')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-2">
            <label for="name" class="required">Name</label>
            <input type="text"
                   name="name"
                   id="name_arm"
                   class="form-control @error('name') is-invalid @enderror"
                   value="{{ old('name') }}"
                   required>
            @error('name')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
        <div class="col-2">
            <label class="pt-2 mt-30" for="is_active">Is Active</label>
            <input type="checkbox" name="is_active" id="is_active" class="@error('is_active') is-invalid @enderror">
            @error('is_active')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
        <div class="col-2">
            <label class="pt-2 mt-30" for="is_actual">Is Actual</label>
            <input type="checkbox" name="is_actual" id="is_actual" class="@error('is_actual') is-invalid @enderror">
            @error('is_actual')
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
                    required>{{ old('description') }}</textarea>
            @error('description')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <div class="col-6">
            <label for="images" class="required">Images</label>
            <input type="file" name="images[]" class="form-control @error('images*') is-invalid @enderror" multiple required>
            @error('images*')
            <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-2">
            <button type="submit" class="btn btn-primary btn-block">Create</button>
        </div>
        <div class="col-2">
            <a href="{{ route('products.index') }}" class="btn btn-primary btn-block">Cancel</a>
        </div>
    </div>
</form>
